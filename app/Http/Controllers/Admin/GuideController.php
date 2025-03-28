<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Guide, GuideCategory};
use App\Http\Requests\{StoreGuideRequest, UpdateGuideRequest};

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guides.index', [
            'guides' => Guide::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guides.create', [
            'guide' => new Guide(),
            'categories' => GuideCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideRequest $request)
    {
        $validated = $request->validated();

        Guide::create($validated);

        return redirect()->route('admin.guides.index')->with('message', __('guides.messages.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $guide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        return view('admin.guides.edit', [
            'guide' => $guide,
            'categories' => GuideCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuideRequest $request, Guide $guide)
    {
        $validated = $request->validated();

        $guide->update($validated);

        return redirect()->route('admin.guides.index')->with('message', __('guides.messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        $guide->delete();

        return redirect()->route('admin.guides.index')->with('message', __('guides.messages.delete'));
    }

    /**
     * Activate the specified resource.
     */
    public function activate(Guide $guide)
    {
        $guide->update([
            'active' => true,
        ]);

        return redirect()->route('admin.guides.index')->with('message', __('guides.messages.activate'));
    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(Guide $guide)
    {
        $guide->update([
            'active' => false,
        ]);

        return redirect()->route('admin.guides.index')->with('message', __('guides.messages.deactivate'));
    }
}
