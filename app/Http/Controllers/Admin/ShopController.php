<?php

namespace App\Http\Controllers\Admin;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $query = Shop::query();

        // Filtrar por categoría si se especifica
        if ($request->filled('category')) {
            $query->byCategory($request->category);
        }

        // Filtrar por estado activo
        if ($request->filled('status')) {
            if ($request->status === 'active') {
                $query->active();
            } elseif ($request->status === 'inactive') {
                $query->where('is_active', false);
            }
        }

        // Buscar por nombre o dirección
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
            });
        }

        $shops = $query->ordered()->get();

        return view('admin.shops.index', compact('shops'));
    }

    public function create()
    {
        return view('admin.shops.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phones' => 'nullable|array',
            'phones.*' => 'nullable|string|max:20',
            'mobiles' => 'nullable|array',
            'mobiles.*' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|in:' . implode(',', array_keys(Shop::CATEGORIES)),
            'is_active' => 'boolean',
            'additional_details' => 'nullable|string',
            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:20',
            'opening_time' => 'nullable|date_format:H:i',
            'closing_time' => 'nullable|date_format:H:i',
            'opening_days' => 'nullable|array',
            'opening_days.*' => 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Filtrar arrays vacíos
        $validated['phones'] = array_filter($validated['phones'] ?? []);
        $validated['mobiles'] = array_filter($validated['mobiles'] ?? []);

        // Manejar la imagen
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('shops', 'public');
        }

        Shop::create($validated);

        return redirect()->route('admin.shops.index')
            ->with('success', 'Comercio creado exitosamente.');
    }

    public function show(Shop $shop)
    {
        return view('admin.shops.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        return view('admin.shops.edit', compact('shop'));
    }

    public function update(Request $request, Shop $shop)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phones' => 'nullable|array',
            'phones.*' => 'nullable|string|max:20',
            'mobiles' => 'nullable|array',
            'mobiles.*' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|in:' . implode(',', array_keys(Shop::CATEGORIES)),
            'is_active' => 'boolean',
            'additional_details' => 'nullable|string',
            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:20',
            'opening_time' => 'nullable|date_format:H:i',
            'closing_time' => 'nullable|date_format:H:i',
            'opening_days' => 'nullable|array',
            'opening_days.*' => 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'sort_order' => 'nullable|integer|min:0',
        ]);

        // Filtrar arrays vacíos
        $validated['phones'] = array_filter($validated['phones'] ?? []);
        $validated['mobiles'] = array_filter($validated['mobiles'] ?? []);

        // Manejar la imagen
        if ($request->hasFile('image')) {
            // Eliminar imagen anterior si existe
            if ($shop->image) {
                Storage::disk('public')->delete($shop->image);
            }
            $validated['image'] = $request->file('image')->store('shops', 'public');
        }

        $shop->update($validated);

        return redirect()->route('admin.shops.index')
            ->with('success', 'Comercio actualizado exitosamente.');
    }

    public function destroy(Shop $shop)
    {
        // Eliminar imagen si existe
        if ($shop->image) {
            Storage::disk('public')->delete($shop->image);
        }

        $shop->delete();

        return redirect()->route('admin.shops.index')
            ->with('success', 'Comercio eliminado exitosamente.');
    }

    // Método para obtener comercios por categoría (API para el frontend)
    public function getByCategory($category)
    {
        $shops = Shop::active()
            ->byCategory($category)
            ->ordered()
            ->get();

        return response()->json($shops);
    }

    // Método para alternar el estado activo/inactivo
    public function toggleStatus(Shop $shop)
    {
        $shop->update(['is_active' => !$shop->is_active]);

        $status = $shop->is_active ? 'activado' : 'desactivado';

        return redirect()->back()
            ->with('success', "Comercio {$status} exitosamente.");
    }
}
