<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoricalCategoryRequest;
use App\Http\Requests\UpdateHistoricalCategoryRequest;
use App\Models\HistoricalCategory;
use Illuminate\Http\Request;

class HistoricalCategoryController extends Controller
{
    public function index()
    {
        $categories = HistoricalCategory::withCount('historicalItems')
            ->orderBy('sort_order')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.historical-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.historical-categories.create');
    }

    public function store(StoreHistoricalCategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'color' => '#16a34a', // Color verde fijo del sitio
            'icon' => $request->icon,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active', true)
        ];

        // Manejar la subida de la imagen de fondo
        if ($request->hasFile('background_image')) {
            $image = $request->file('background_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('categories/backgrounds'), $imageName);
            $data['background_image'] = 'categories/backgrounds/' . $imageName;
        }

        HistoricalCategory::create($data);

        return redirect()->route('admin.historical-categories.index')
            ->with('success', 'Categoría histórica creada exitosamente.');
    }

    public function show(HistoricalCategory $historicalCategory)
    {
        $historicalCategory->load('historicalItems');
        return view('admin.historical-categories.show', compact('historicalCategory'));
    }

    public function edit(HistoricalCategory $historicalCategory)
    {
        return view('admin.historical-categories.edit', compact('historicalCategory'));
    }

    public function update(UpdateHistoricalCategoryRequest $request, HistoricalCategory $historicalCategory)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'color' => '#16a34a', // Color verde fijo del sitio
            'icon' => $request->icon,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active', true)
        ];

        // Manejar la subida de la imagen de fondo
        if ($request->hasFile('background_image')) {
            // Eliminar la imagen anterior si existe
            if ($historicalCategory->background_image && file_exists(public_path($historicalCategory->background_image))) {
                unlink(public_path($historicalCategory->background_image));
            }

            $image = $request->file('background_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('categories/backgrounds'), $imageName);
            $data['background_image'] = 'categories/backgrounds/' . $imageName;
        }

        $historicalCategory->update($data);

        return redirect()->route('admin.historical-categories.index')
            ->with('success', 'Categoría histórica actualizada exitosamente.');
    }

    public function destroy(HistoricalCategory $historicalCategory)
    {
        // Verificar si tiene elementos históricos asociados
        if ($historicalCategory->historicalItems()->count() > 0) {
            return redirect()->route('admin.historical-categories.index')
                ->with('error', 'No se puede eliminar la categoría porque tiene elementos históricos asociados.');
        }

        // Eliminar la imagen de fondo si existe
        if ($historicalCategory->background_image && file_exists(public_path($historicalCategory->background_image))) {
            unlink(public_path($historicalCategory->background_image));
        }

        $historicalCategory->delete();

        return redirect()->route('admin.historical-categories.index')
            ->with('success', 'Categoría histórica eliminada exitosamente.');
    }

    public function activate(HistoricalCategory $historicalCategory)
    {
        $historicalCategory->update(['is_active' => true]);

        return redirect()->route('admin.historical-categories.index')
            ->with('success', 'Categoría histórica activada exitosamente.');
    }

    public function deactivate(HistoricalCategory $historicalCategory)
    {
        $historicalCategory->update(['is_active' => false]);

        return redirect()->route('admin.historical-categories.index')
            ->with('success', 'Categoría histórica desactivada exitosamente.');
    }
}
