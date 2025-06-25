<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class EditorController extends Controller
{
    public function uploadImage(Request $request)
    {
        $image = $request->file('upload');

        $result = $image->store('news/uploads', 'public');

        if ($result) {
            return response()->json([
                'success' => 1,
                'file' => [
                    'url' => '/storage/' . $result,
                ],
            ]);
        }

        return response()->json(['success' => 0]);
    }

    public function fetchImage(Request $request)
    {
        $imageUrl = $request->input('url');

        // Descargar la imagen
        $response = Http::get($imageUrl);

        // Verificar que la respuesta es una imagen
        if ($response->successful() && str_contains($response->header('Content-Type'), 'image')) {
            // Generar un nombre único para la imagen
            $imageName = uniqid() . '.jpg'; // Asumiendo JPEG, ajustar según sea necesario

            // Definir la ruta de almacenamiento
            $path = "news/uploads/{$imageName}";

            // Almacenar la imagen
            $result = Storage::disk('public')->put($path, $response->body());

            // Verificar que la imagen se almacenó correctamente
            if ($result) {
                // Responder con la URL de la imagen
                return response()->json([
                    'success' => 1,
                    'file' => [
                        'url' => '/storage/' . $path,
                    ],
                ]);
            }
        }

        // Manejar el caso de error
        return response()->json(['success' => 0]);
    }

        public function uploadAttachment(Request $request)
    {
        // Allow video files, PDFs, Excel files, Word documents
        $request->validate([
            'file' => 'required|mimetypes:video/*,application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document|max:10240', // 10MB max
        ]);

        $attachment = $request->file('file');

        // Determine the storage path based on context and file type
        $mimeType = $attachment->getMimeType();
        $context = $request->input('context', 'news'); // Default to news for backwards compatibility

        if ($context === 'edicts') {
            // For edicts, organize by file type
            if (str_contains($mimeType, 'video')) {
                $storageFolder = 'edicts/videos';
            } elseif (str_contains($mimeType, 'pdf')) {
                $storageFolder = 'edicts/documents';
            } elseif (str_contains($mimeType, 'excel') || str_contains($mimeType, 'spreadsheet')) {
                $storageFolder = 'edicts/spreadsheets';
            } elseif (str_contains($mimeType, 'word') || str_contains($mimeType, 'document')) {
                $storageFolder = 'edicts/documents';
            } else {
                $storageFolder = 'edicts/attachments';
            }
        } else {
            // For news, keep original behavior (only videos)
            $storageFolder = 'news/attachments';
        }

        $result = $attachment->store($storageFolder, 'public');

        if ($result) {
            return response()->json([
                'success' => 1,
                'file' => [
                    'url' => '/storage/' . $result,
                    'title' => $attachment->getClientOriginalName(),
                    'extension' => $attachment->getClientOriginalExtension(),
                    'size' => $attachment->getSize(),
                ],
            ]);
        }

        return response()->json(['success' => 0]);
    }
}
