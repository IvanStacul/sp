<?php

namespace App\Http\Controllers;

use App\Models\Edict;
use Illuminate\Http\Request;

class EdictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edicts = Edict::active()
            ->latest('publish_date')
            ->paginate(12);

        return view('pages.edicts.index', compact('edicts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Edict $edict)
    {
        // Check if the edict is active
        if (!$edict->is_active) {
            abort(404);
        }

        return view('pages.edicts.show', compact('edict'));
    }
}
