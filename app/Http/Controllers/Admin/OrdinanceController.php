<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ordinance;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOrdinanceRequest;
use App\Http\Requests\UpdateOrdinanceRequest;
use App\Models\Category;

class OrdinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ordinances.index', [
            'ordinances' => Ordinance::with('category')->orderBy('date', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ordinances.create', [
            'ordinance' => new Ordinance(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdinanceRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('ordinances');
        }

        // $validated['user_id'] = auth()->id();

        Ordinance::create($validated);

        return redirect()->route('admin.ordinances.index')
            ->with('message', __('ordinances.messages.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordinance $ordinance)
    {
        return view('admin.ordinances.show', [
            'ordinance' => $ordinance->load('category'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordinance $ordinance)
    {
        return view('admin.ordinances.edit', [
            'ordinance' => $ordinance,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdinanceRequest $request, Ordinance $ordinance)
    {
        $validated = $request->validated();

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('ordinances');
        }

        $ordinance->update($validated);

        return redirect()->route('admin.ordinances.index')
            ->with('message', __('ordinances.messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordinance $ordinance)
    {
        $ordinance->delete();

        return redirect()->route('admin.ordinances.index')
            ->with('message', __('ordinances.messages.delete'));
    }

    /**
     * Activate the specified resource.
     */
    public function activate(Ordinance $ordinance)
    {
        $ordinance->update(['is_active' => true]);

        return redirect()->route('admin.ordinances.index')
            ->with('message', __('ordinances.messages.activate'));
    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Ordinance $ordinance)
    {
        $ordinance->update(['is_active' => false]);

        return redirect()->route('admin.ordinances.index')
            ->with('message', __('ordinances.messages.deactivate'));
    }
}
