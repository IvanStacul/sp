<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoricalItemRequest;
use App\Http\Requests\UpdateHistoricalItemRequest;
use App\Models\HistoricalItem;
use App\Models\HistoricalItemFile;
use App\Models\HistoricalItemMedia;
use App\Models\HistoricalCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HistoricalItemController extends Controller
{
    public function index()
    {
        $historicalItems = HistoricalItem::with(['category', 'files', 'media'])
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.historical-items.index', compact('historicalItems'));
    }

    public function create()
    {
        $categories = HistoricalCategory::active()->orderBy('sort_order')->get();
        return view('admin.historical-items.create', compact('categories'));
    }

    public function store(StoreHistoricalItemRequest $request)
    {
        $imagePath = null;

        // Manejo de imagen de portada
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('historical', $imageName, 'public');
        }

        // Crear el item histórico
        $historicalItem = HistoricalItem::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'event_date' => $request->event_date ?? now()->toDateString(),
            'image_path' => 'storage/' . $imagePath,
            'pdf_path' => null,
            'sort_order' => $request->sort_order ?? 0,
            'featured' => $request->boolean('featured'),
            'is_active' => $request->boolean('is_active', true)
        ]);

        // Procesar PDFs
        if ($request->hasFile('pdfs')) {
            $this->processFiles($request->file('pdfs'), $historicalItem, 'pdf');
        }

        // Procesar enlaces multimedia
        if ($request->has('media_urls') && is_array($request->media_urls)) {
            $this->processMediaLinks($request->media_urls, $request->media_titles ?? [], $historicalItem);
        }

        return redirect()->route('admin.historical-items.index')
            ->with('success', 'Elemento histórico creado exitosamente.');
    }

    /**
     * Procesar y guardar archivos PDF
     */
    private function processFiles($files, $historicalItem, $fileType = 'pdf')
    {
        $sortOrder = 0;

        foreach ($files as $index => $file) {
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . $sortOrder . '_' . Str::slug($historicalItem->title) . '.' . $extension;

            $folder = 'historical/pdfs';
            $filePath = $file->storeAs($folder, $fileName, 'public');

            // Usar el nombre original sin extensión como display_name por defecto
            $displayName = pathinfo($originalName, PATHINFO_FILENAME);

            HistoricalItemFile::create([
                'historical_item_id' => $historicalItem->id,
                'file_type' => $fileType,
                'file_path' => 'storage/' . $filePath,
                'file_name' => $fileName,
                'original_name' => $originalName,
                'display_name' => $displayName,
                'mime_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
                'description' => null,
                'sort_order' => $sortOrder
            ]);

            $sortOrder++;
        }
    }

    public function show(HistoricalItem $historicalItem)
    {
        $historicalItem->load(['category', 'files', 'media']);
        return view('admin.historical-items.show', compact('historicalItem'));
    }

    public function edit(HistoricalItem $historicalItem)
    {
        $historicalItem->load(['files', 'media']);
        $categories = HistoricalCategory::active()->orderBy('sort_order')->get();
        return view('admin.historical-items.edit', compact('historicalItem', 'categories'));
    }

    public function update(UpdateHistoricalItemRequest $request, HistoricalItem $historicalItem)
    {
        $data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
            'event_date' => $request->event_date ?? now()->toDateString(),
            'sort_order' => $request->sort_order ?? 0,
            'featured' => $request->boolean('featured'),
            'is_active' => $request->boolean('is_active', true)
        ];

        // Manejo de nueva imagen de portada
        if ($request->hasFile('image')) {
            // Eliminar imagen anterior
            if ($historicalItem->image_path && file_exists(public_path($historicalItem->image_path))) {
                unlink(public_path($historicalItem->image_path));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('historical', $imageName, 'public');
            $data['image_path'] = 'storage/' . $imagePath;
        }

        $historicalItem->update($data);

        // Eliminar archivos seleccionados
        if ($request->has('delete_files')) {
            foreach ($request->delete_files as $fileId) {
                $file = HistoricalItemFile::find($fileId);
                if ($file && $file->historical_item_id === $historicalItem->id) {
                    // Eliminar archivo físico
                    if (file_exists(public_path($file->file_path))) {
                        unlink(public_path($file->file_path));
                    }
                    $file->delete();
                }
            }
        }

        // Agregar nuevos PDFs
        if ($request->hasFile('pdfs')) {
            $this->processFiles($request->file('pdfs'), $historicalItem, 'pdf');
        }

        // Eliminar enlaces multimedia seleccionados
        if ($request->has('delete_media')) {
            foreach ($request->delete_media as $mediaId) {
                $media = HistoricalItemMedia::find($mediaId);
                if ($media && $media->historical_item_id === $historicalItem->id) {
                    $media->delete();
                }
            }
        }

        // Agregar nuevos enlaces multimedia
        if ($request->has('media_urls') && is_array($request->media_urls)) {
            $this->processMediaLinks($request->media_urls, $request->media_titles ?? [], $historicalItem);
        }

        return redirect()->route('admin.historical-items.index')
            ->with('success', 'Elemento histórico actualizado exitosamente.');
    }

    public function destroy(HistoricalItem $historicalItem)
    {
        // Eliminar todos los archivos asociados (PDFs)
        foreach ($historicalItem->files as $file) {
            if (file_exists(public_path($file->file_path))) {
                unlink(public_path($file->file_path));
            }
            $file->delete();
        }

        // Eliminar imagen de portada
        if ($historicalItem->image_path && file_exists(public_path($historicalItem->image_path))) {
            unlink(public_path($historicalItem->image_path));
        }

        // Eliminar PDF legacy si existe
        if ($historicalItem->pdf_path && file_exists(public_path($historicalItem->pdf_path))) {
            unlink(public_path($historicalItem->pdf_path));
        }

        $historicalItem->delete();

        return redirect()->route('admin.historical-items.index')
            ->with('success', 'Elemento histórico eliminado exitosamente.');
    }

    public function activate(HistoricalItem $historicalItem)
    {
        $historicalItem->update(['is_active' => true]);

        return redirect()->route('admin.historical-items.index')
            ->with('success', 'Elemento histórico activado exitosamente.');
    }

    public function deactivate(HistoricalItem $historicalItem)
    {
        $historicalItem->update(['is_active' => false]);

        return redirect()->route('admin.historical-items.index')
            ->with('success', 'Elemento histórico desactivado exitosamente.');
    }

    /**
     * Eliminar un archivo individual
     */
    public function deleteFile(HistoricalItemFile $file)
    {
        // Verificar que el archivo existe físicamente y eliminarlo
        if (file_exists(public_path($file->file_path))) {
            unlink(public_path($file->file_path));
        }

        $historicalItemId = $file->historical_item_id;
        $file->delete();

        return redirect()->route('admin.historical-items.edit', $historicalItemId)
            ->with('success', 'Archivo eliminado exitosamente.');
    }

    /**
     * Marcar un archivo como destacado
     */
    public function setFeaturedFile(HistoricalItemFile $file)
    {
        // Remover featured de todos los archivos del mismo tipo del mismo item
        HistoricalItemFile::where('historical_item_id', $file->historical_item_id)
            ->where('file_type', $file->file_type)
            ->update(['is_featured' => false]);

        // Marcar este archivo como destacado
        $file->update(['is_featured' => true]);

        return redirect()->back()
            ->with('success', 'Archivo marcado como destacado.');
    }

    /**
     * Actualizar el nombre de visualización de un archivo
     */
    public function updateFileName(Request $request, HistoricalItemFile $file)
    {
        $request->validate([
            'display_name' => 'required|string|max:255'
        ]);

        $file->update([
            'display_name' => $request->display_name
        ]);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Nombre actualizado exitosamente'
            ]);
        }

        return redirect()->back()
            ->with('success', 'Nombre del archivo actualizado exitosamente.');
    }

    /**
     * Procesar y guardar enlaces multimedia
     */
    private function processMediaLinks($urls, $titles, $historicalItem)
    {
        $sortOrder = $historicalItem->media()->count();

        foreach ($urls as $index => $url) {
            // Saltar URLs vacías
            if (empty(trim($url))) {
                continue;
            }

            $mediaType = 'youtube'; // Por defecto YouTube

            // Detectar tipo de media basado en la URL
            if (strpos($url, 'youtube.com') !== false || strpos($url, 'youtu.be') !== false) {
                $mediaType = 'youtube';
            } elseif (strpos($url, 'vimeo.com') !== false) {
                $mediaType = 'vimeo';
            } else {
                $mediaType = 'external_link';
            }

            HistoricalItemMedia::create([
                'historical_item_id' => $historicalItem->id,
                'media_type' => $mediaType,
                'url' => trim($url),
                'title' => $titles[$index] ?? null,
                'sort_order' => $sortOrder,
                'is_active' => true
            ]);

            $sortOrder++;
        }
    }
}
