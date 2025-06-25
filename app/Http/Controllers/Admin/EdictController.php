<?php

namespace App\Http\Controllers\Admin;

use App\Models\Edict;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEdictRequest;
use App\Http\Requests\UpdateEdictRequest;

class EdictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.edicts.index', [
            'edicts' => Edict::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.edicts.create', [
            'edict' => new Edict(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEdictRequest $request)
    {
        $validated = $request->validated();

        $edict = Edict::create($validated);

        return redirect()->route('admin.edicts.index')->with('message', __('edicts.messages.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Edict $edict)
    {
        return view('admin.edicts.show', [
            'edict' => $edict,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Edict $edict)
    {
        return view('admin.edicts.edit', [
            'edict' => $edict,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEdictRequest $request, Edict $edict)
    {
        $validated = $request->validated();

        unset($validated['slug']); // Slug is not updated

        $edict->update($validated);

        return redirect()->route('admin.edicts.index')->with('message', __('edicts.messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Edict $edict)
    {
        $edict->delete();

        return redirect()->route('admin.edicts.index')->with('message', __('edicts.messages.delete'));
    }

    /**
     * Activate the specified resource.
     */
    public function activate(Edict $edict)
    {
        $edict->update(['is_active' => true]);

        return redirect()->route('admin.edicts.index')->with('message', __('edicts.messages.activate'));
    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Edict $edict)
    {
        $edict->update(['is_active' => false]);

        return redirect()->route('admin.edicts.index')->with('message', __('edicts.messages.deactivate'));
    }
}
