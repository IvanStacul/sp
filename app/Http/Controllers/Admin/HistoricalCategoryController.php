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
        HistoricalCategory::create([
            'name' => $request->name,
            'description' => $request->description,
            'color' => '#16a34a', // Color verde fijo del sitio
            'icon' => $request->icon,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active', true)
        ]);

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
        $historicalCategory->update([
            'name' => $request->name,
            'description' => $request->description,
            'color' => '#16a34a', // Color verde fijo del sitio
            'icon' => $request->icon,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->boolean('is_active', true)
        ]);

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
