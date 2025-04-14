<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use DOMDocument;
use DOMElement;
use DOMNode;

class ImportWordpressPostsController extends Controller
{
    private string $siteUrl;
    private int $perPage;
    private int $page;
    private array $categories;
    private array $posts;

    public function __construct()
    {
        $this->siteUrl = 'https://saenzpena.gob.ar';
        $this->perPage = 1;
        $this->page = 1;
        $this->categories = [];
        $this->posts = [];
    }

    public function index()
    {
        return view('admin.import-wordpress');
    }

    public function create()
    {
        // 1. Obtener las categorías de WordPress
        // $this->getCategories();

        // 2. Obtener los posts de WordPress
        $this->getPosts();

        return response()->json([
            'message' => 'Importación completada',
            'posts' => $this->posts,
            'categories' => $this->categories,
        ]);
    }

    private function getCategories()
    {
        // 1. Obtener las categorías de WordPress
        $endpoint = "{$this->siteUrl}/wp-json/wp/v2/categories";

        $response = Http::get($endpoint, ['per_page' => $this->perPage, 'page' => $this->page]);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => 'Fallo al obtener categorías de WP',
            ];
        }

        $totalPages = $response->header('X-WP-TotalPages');

        for ($page = 1; $page <= $totalPages; $page++) {
            $response = Http::get($endpoint, [
                'per_page' => $this->perPage,
                'page' => $page,
            ]);

            if ($response->failed()) {
                return [
                    'success' => false,
                    'message' => 'Fallo al obtener categorías de WP',
                ];
            }

            $this->categories = array_merge($this->categories, $response->json());
        }

        // 2. Guardar las categorías en la base de datos de Laravel
        foreach ($this->categories as $category) {
            NewsCategory::updateOrCreate(
                ['wp_id' => $category['id']],
                [
                    'name' => $category['name'],
                    'count' => $category['count'],
                    'slug' => $category['slug'],
                    'description' => $category['description'],
                    'parent_id' => $category['parent'] ?? null,
                ]
            );
        }

        return [
            'success' => true,
            'message' => 'Categorías obtenidas exitosamente',
            'categories' => $this->categories,
            'count' => count($this->categories),
        ];
    }

    private function getPosts()
    {
        $endpoint = "{$this->siteUrl}/wp-json/wp/v2/posts";

        // 1) Hacer primera petición para saber cuántas páginas hay.
        $response = Http::get($endpoint, [
            'per_page' => $this->perPage,
            'page' => 1,
        ]);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => 'Fallo al obtener posts de WP (primera página)',
            ];
        }

        // 2) Obtener total de páginas
        $totalPages = $response->header('X-WP-TotalPages');
        if (!$totalPages) {
            // Si no viene la cabecera X-WP-TotalPages, asumimos 1
            $totalPages = 1;
        }

        // 3) Hacer un bucle por cada página
        for ($page = 1; $page <= $totalPages; $page++) {
            // Petición para esta página
            $pageResponse = Http::get($endpoint, [
                'per_page' => $this->perPage,
                'page' => $page,
            ]);

            if ($pageResponse->failed()) {
                return [
                    'success' => false,
                    'message' => "Fallo al obtener posts de WP en la página {$page}",
                ];
            }

            $wpPosts = $pageResponse->json();

            // 4) Procesar cada post
            foreach ($wpPosts as $wpPost) {
                $newsData = [
                    'wp_id'        => $wpPost['id'],
                    'title'        => $this->cleanText($wpPost['title']['rendered']),
                    'slug'         => $wpPost['slug'],
                    'summary'      => str_replace('Read more', '', $this->cleanText($wpPost['excerpt']['rendered'])),
                    'publish_date' => \Carbon\Carbon::parse($wpPost['date'])->format('Y-m-d H:i:s'),
                    'is_active'    => $wpPost['status'] === 'publish',
                    'user_id'      => 1, // ID del usuario que hace la importación
                ];

                // 4.1) Obtener attachments
                $attachments = $this->fetchAttachmentsByParent($newsData['wp_id']);

                // 4.2) Descargar y almacenar => $downloadMap
                $downloadMap = [];
                foreach ($attachments as $att) {
                    $sourceUrl = $att['source_url'];
                    $mimeType  = $att['mime_type'] ?? null;
                    $localUrl  = $this->downloadAndStoreImage($sourceUrl, $mimeType);
                    $downloadMap[$sourceUrl] = $localUrl;
                }

                // 4.3) Saber imagen destacada (featured)
                $featuredLocalUrl = null;
                if (!empty($wpPost['featured_media']) && $wpPost['featured_media'] != 0) {
                    $featuredMediaId = $wpPost['featured_media'];
                    $featured        = $this->fetchMediaById($featuredMediaId);
                    if ($featured && isset($featured['source_url'])) {
                        $featuredLocalUrl = $this->downloadAndStoreImage(
                            $featured['source_url'],
                            $featured['mime_type'] ?? null,
                            false
                        );
                    }
                }

                // 4.4) Convertir HTML -> Bloques EditorJS
                $editorJsBlocks = $this->convertHtmlToEditorJsBlocks($wpPost['content']['rendered'], $downloadMap);
                $editorJsContent = [
                    'time'    => now()->timestamp * 1000,
                    'blocks'  => $editorJsBlocks,
                    'version' => '2.29.0',
                ];
                $newsData['content']      = json_encode($editorJsContent);
                $newsData['cover_image']  = $featuredLocalUrl;

                // 4.5) Guardar en base de datos
                $news = News::updateOrCreate(
                    ['wp_id' => $newsData['wp_id']],
                    [
                        'title'        => $newsData['title'],
                        'slug'         => $newsData['slug'],
                        'summary'      => $newsData['summary'],
                        'content'      => $newsData['content'],
                        'cover_image'  => $newsData['cover_image'],
                        'publish_date' => $newsData['publish_date'],
                        'is_active'    => $newsData['is_active'],
                        'user_id'      => $newsData['user_id'],
                    ]
                );

                // 4.6) Asociar categorías
                if (isset($wpPost['categories'])) {
                    $categoryIds = $wpPost['categories'];
                    foreach ($categoryIds as $categoryId) {
                        $category = NewsCategory::where('wp_id', $categoryId)->first();
                        if ($category) {
                            // Usamos syncWithoutDetaching para evitar duplicados en la pivot
                            $news->categories()->syncWithoutDetaching([$category->id]);
                        }
                    }
                }

                // 4.7) Agregarlo a $this->posts para el reporte final
                $this->posts[] = [
                    'id'           => $news->id,
                    'title'        => $news->title,
                    'slug'         => $news->slug,
                    'summary'      => $news->summary,
                    'content'      => $news->content,
                    'cover_image'  => $news->cover_image,
                    'publish_date' => $news->publish_date,
                    'is_active'    => $news->is_active,
                ];
            }
        } // Fin del for pages

        // 5) Retorno exitoso con todos los posts
        return [
            'success' => true,
            'message' => 'Posts obtenidos exitosamente',
            'posts'   => $this->posts,
            'count'   => count($this->posts),
        ];
    }


    /**
     * Limpia una cadena proveniente de WP que puede traer HTML y entidades.
     */
    private function cleanText(string $value): string
    {
        // Elimina las etiquetas HTML
        $noHtml = strip_tags($value);

        // Decodifica entidades HTML (&amp;, &nbsp;, etc.)
        $decoded = html_entity_decode($noHtml, ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // Recorta espacios extra
        return trim($decoded);
    }

    /**
     * Llama a la API de WP para obtener attachments filtrados por 'parent'.
     */
    private function fetchAttachmentsByParent(int $postId): array
    {
        $endpoint = "{$this->siteUrl}/wp-json/wp/v2/media?parent={$postId}&per_page=100";
        $res = Http::get($endpoint);
        if ($res->successful()) {
            return $res->json();
        }
        return [];
    }

    /**
     * Devuelve la info de un media/attachment a partir de su ID.
     */
    private function fetchMediaById(int $mediaId): ?array
    {
        $endpoint = "{$this->siteUrl}/wp-json/wp/v2/media/{$mediaId}";
        $res = Http::get($endpoint);
        if ($res->successful()) {
            return $res->json();
        }
        return null;
    }

    /**
     * Descarga y almacena en /storage/app/public/... la imagen, retorna la URL local
     */
    private function downloadAndStoreImage(string $imageUrl, string $mimeType = null, bool $fullUrl = true): string
    {
        try {
            $imageData = Http::get($imageUrl)->body();
        } catch (\Exception $e) {
            // fallback: devolvemos la URL externa
            return $imageUrl;
        }

        // 1. Intentar deducir extensión usando mime_type
        $ext = 'jpg'; // Valor por defecto
        if (! empty($mimeType)) {
            $parts = explode('/', $mimeType); // ["image","jpeg"]
            if (count($parts) === 2) {
                $type = strtolower($parts[1]);
                // Normalizamos "jpeg" => "jpg"
                if ($type === 'jpeg') {
                    $ext = 'jpg';
                } else {
                    // png, gif, webp, etc.
                    $ext = $type;
                }
            }
        } else {
            // 2. Si no pasamos el mime, podemos intentar deducirlo del path
            $pathInfo = pathinfo(parse_url($imageUrl, PHP_URL_PATH));
            if (!empty($pathInfo['extension'])) {
                $extGuess = strtolower($pathInfo['extension']);
                $ext = $extGuess === 'jpeg' ? 'jpg' : $extGuess;
            }
        }

        $filename = uniqid('wpimg_') . '.' . $ext;
        $path = 'news/images/' . $filename;

        Storage::disk('public')->put($path, $imageData);

        return $fullUrl ? '/storage/' . $path : $path;
    }

    /**
     * Convierte HTML a bloques EditorJS, aprovechando un 'downloadMap' para reemplazar <img> src
     */
    private function convertHtmlToEditorJsBlocks(string $html, array $downloadMap): array
    {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        @$dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);
        libxml_clear_errors();

        $blocks = [];
        $body = $dom->getElementsByTagName('body')->item(0);
        if (!$body) {
            return $blocks;
        }

        // Recorremos nodos de primer nivel del body
        foreach ($body->childNodes as $node) {
            if ($node->nodeName === '#text') {
                // Texto suelto
                $text = trim($node->textContent);
                if ($text !== '') {
                    $blocks[] = [
                        'type' => 'paragraph',
                        'data' => ['text' => $text],
                    ];
                }
                continue;
            }

            if ($node instanceof DOMElement) {
                switch ($node->nodeName) {
                    case 'p':
                        // Parsear <p> con posibilidad de enlaces/imágenes dentro
                        $subBlocks = $this->parseParagraphElement($node, $downloadMap);
                        $blocks = array_merge($blocks, $subBlocks);
                        break;

                    case 'figure':
                    case 'img':
                        $imgElement = ($node->nodeName === 'img')
                            ? $node
                            : $node->getElementsByTagName('img')->item(0);

                        if ($imgElement) {
                            $blocks[] = $this->createImageBlock($imgElement, $downloadMap);
                        }
                        break;

                    // Manejo de encabezados (h1..h6)
                    case 'h1':
                    case 'h2':
                    case 'h3':
                    case 'h4':
                    case 'h5':
                    case 'h6':
                        $headerLevel = (int) substr($node->nodeName, 1);
                        $text = trim($this->domNodeToHtml($node));
                        if ($text !== '') {
                            $blocks[] = [
                                'type' => 'header',
                                'data' => [
                                    'text' => $text,
                                    'level' => $headerLevel,
                                ],
                            ];
                        }
                        break;

                    case 'hr':
                        $blocks[] = [
                            'type' => 'delimiter',
                            'data' => [],
                        ];
                        break;

                    // Manejo de listas
                    case 'ul':
                    case 'ol':
                        $blocks[] = $this->parseListElement($node);
                        break;

                    // Manejo de tablas
                    case 'table':
                        $blocks[] = $this->parseTableElement($node);
                        break;

                    // Podrías manejar <blockquote>, <pre>, etc., si lo requieres
                    case 'div':
                    case 'span':
                        // Por ahora ignoramos y sólo tomamos su texto/hijos
                        $textFallback = trim($this->domNodeToHtml($node));
                        if (!empty($textFallback)) {
                            $blocks[] = [
                                'type' => 'paragraph',
                                'data' => ['text' => $textFallback],
                            ];
                        }
                        break;

                    default:
                        // Fallback: tomar textContent
                        $textFallback = trim($node->textContent);
                        if (!empty($textFallback)) {
                            $blocks[] = [
                                'type' => 'paragraph',
                                'data' => ['text' => $textFallback],
                            ];
                        }
                        break;
                }
            }
        }

        return $blocks;
    }

    /**
     * Convierte un <ul> o <ol> en un bloque EditorJS de tipo "list".
     */
    private function parseListElement(DOMElement $listNode): array
    {
        // Determinar si es <ul> o <ol>
        $isOrdered = ($listNode->nodeName === 'ol');
        $itemsData = [];

        // Recorrer los hijos <li> del <ul> o <ol>
        foreach ($listNode->childNodes as $li) {
            if ($li instanceof DOMElement && $li->nodeName === 'li') {
                $text = trim($this->domNodeToHtml($li));
                $itemsData[] = [
                    'content' => $text,
                    'items'   => [],
                ];
            }
        }

        return [
            'type' => 'list',
            'data' => [
                'style' => $isOrdered ? 'ordered' : 'unordered',
                'items' => $itemsData,
            ]
        ];
    }

    /**
     * Convierte un <table> en un bloque EditorJS de tipo "table".
     * Asume un plugin Table que soporte "withHeadings" y "content".
     */
    private function parseTableElement(DOMElement $tableNode): array
    {
        $rowsData = [];
        $withHeadings = false;

        // Ver si hay <thead>
        $thead = $tableNode->getElementsByTagName('thead')->item(0);
        if ($thead) {
            $withHeadings = true;
        }

        // Recorremos <tr> en <thead> y/o <tbody>. Simplificamos para el ejemplo
        $trNodes = $tableNode->getElementsByTagName('tr');
        foreach ($trNodes as $tr) {
            $rowCells = [];
            $tdNodes = $tr->getElementsByTagName('td');
            $thNodes = $tr->getElementsByTagName('th');

            if ($thNodes->length > 0) {
                // Si se usan <th>, interpretamos esa fila como heading
                $withHeadings = true;
                foreach ($thNodes as $th) {
                    $rowCells[] = trim($this->domNodeToHtml($th));
                }
                $rowsData[] = $rowCells;
            } else {
                foreach ($tdNodes as $td) {
                    $rowCells[] = trim($this->domNodeToHtml($td));
                }
                if (!empty($rowCells)) {
                    $rowsData[] = $rowCells;
                }
            }
        }

        return [
            'type' => 'table',
            'data' => [
                'withHeadings' => $withHeadings,
                'content' => $rowsData,
            ]
        ];
    }

    /**
     * Parsea un <p> y separa texto e imágenes en bloques EditorJS distintos.
     */
    private function parseParagraphElement(DOMElement $pNode, array $downloadMap): array
    {
        $blocks = [];
        $paragraphText = '';

        foreach ($pNode->childNodes as $child) {
            if ($child->nodeName === 'img') {
                // Creas un bloque "image"
                $blocks[] = $this->createImageBlock($child, $downloadMap);
            } else {
                // Concatena el HTML (o texto) del child
                $paragraphText .= $this->domNodeToHtml($child);
            }
        }

        // Al final, si quedó texto, lo transformamos en UN bloque "paragraph" con HTML inline
        $paragraphText = trim($paragraphText);
        if (!empty($paragraphText)) {
            $blocks[] = [
                'type' => 'paragraph',
                'data' => ['text' => $paragraphText],
            ];
        }

        return $blocks;
    }

    /**
     * Acepta un DOMNode (puede ser elemento o texto) y retorna su HTML
     */
    private function domNodeToHtml(DOMNode $node): string
    {
        // Retorna la representación HTML (etiquetas + contenido) de ese nodo
        return $node->ownerDocument->saveHTML($node) ?? '';
    }

    /**
     * Crea un bloque de EditorJS "image" desde un DOMElement <img>.
     */
    private function createImageBlock(DOMElement $imgElement, array $downloadMap): array
    {
        $src = $imgElement->getAttribute('src');
        $alt = $imgElement->getAttribute('alt') ?? '';

        // Revisar si está en $downloadMap y usar la URL local
        $localUrl = $downloadMap[$src] ?? $src;

        return [
            'type' => 'image',
            'data' => [
                'file' => ['url' => $localUrl],
                'caption' => $alt,
                'withBorder' => false,
                'stretched' => false,
                'withBackground' => false,
            ],
        ];
    }
}
