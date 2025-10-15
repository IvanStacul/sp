<?php

namespace App\Http\Controllers;

use App\Models\HistoricalItem;
use Illuminate\Http\Request;

class HistoricalItemController extends Controller
{
    public function index()
    {
        $items = HistoricalItem::active()
            ->orderBy('sort_order')
            ->orderBy('title')
            ->get();

        return view('pages.historical.index', compact('items'));
    }

    public function show(HistoricalItem $historicalItem)
    {
        if (!$historicalItem->is_active) {
            abort(404);
        }

        $relatedItems = HistoricalItem::active()
            ->where('id', '!=', $historicalItem->id)
            ->limit(3)
            ->get();

        return view('pages.historical.show', compact('historicalItem', 'relatedItems'));
    }
}
