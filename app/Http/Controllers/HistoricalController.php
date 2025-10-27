<?php

namespace App\Http\Controllers;

use App\Models\HistoricalItem;
use App\Models\HistoricalCategory;
use Illuminate\Http\Request;

class HistoricalController extends Controller
{
    public function index(Request $request)
    {
        $query = HistoricalItem::with(['category', 'pdfs'])
            ->active()
            ->orderBy('sort_order')
            ->orderByDesc('event_date');

        $selectedCategory = null;
        
        // Filtro por categoría si se especifica
        if ($request->has('category') && $request->category) {
            $selectedCategory = HistoricalCategory::where('slug', $request->category)->first();
            if ($selectedCategory) {
                $query->where('category_id', $selectedCategory->id);
            }
        }

        $historicalItems = $query->get();
        $featured = $historicalItems->where('featured', true);
        $categories = HistoricalCategory::active()->orderBy('sort_order')->get();

        return view('pages.historical.index', compact('historicalItems', 'featured', 'categories', 'selectedCategory'));
    }

    public function show($slug)
    {
        $historicalItem = HistoricalItem::with(['category', 'pdfs', 'activeMedia', 'approvedComments.user'])
            ->where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('pages.historical.show', compact('historicalItem'));
    }
}
