<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class PublicShopController extends Controller
{
    public function farmacias()
    {
        $farmacias = Shop::active()
            ->byCategory('farmacias')
            ->ordered()
            ->get();

        $centrosSalud = Shop::active()
            ->byCategory('centros_salud')
            ->ordered()
            ->get();

        return view('pages.about.tourism.centros-salud-farmacias-dynamic', compact('farmacias', 'centrosSalud'));
    }

    public function gastronomia()
    {
        $gastronomia = Shop::active()
            ->byCategory('gastronomia')
            ->ordered()
            ->get();

        // Obtener hoteles desde el método existente (mantienes los hoteles como están)
        $hoteles = collect(); // Por ahora vacío, mantienes la lógica actual de hoteles

        return view('pages.about.tourism.hoteleria-gastronomia-dynamic', compact('gastronomia', 'hoteles'));
    }

    public function centrosSalud()
    {
        return $this->farmacias(); // Redirige al mismo método ya que están en la misma página
    }

    public function getShopsByCategory(Request $request, $category)
    {
        $shops = Shop::active()
            ->byCategory($category)
            ->ordered()
            ->get();

        if ($request->ajax()) {
            return response()->json([
                'shops' => $shops,
                'count' => $shops->count()
            ]);
        }

        return view('pages.about.tourism.shops-by-category', compact('shops', 'category'));
    }

    public function show(Shop $shop)
    {
        if (!$shop->is_active) {
            abort(404);
        }

        return view('pages.about.tourism.shop-detail', compact('shop'));
    }
}
