<?php

namespace App\Http\Controllers\Admin;

use App\Models\GuideCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuideCategoryRequest;
use App\Http\Requests\UpdateGuideCategoryRequest;

class GuideCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.guide-categories.index', [
            'categories' => GuideCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guide-categories.create', [
            'category' => new GuideCategory(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideCategoryRequest $request)
    {
        GuideCategory::create($request->validated());

        return redirect()->route('admin.guide-categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(GuideCategory $guideCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GuideCategory $guideCategory)
    {
        return view('admin.guide-categories.edit', [
            'guideCategory' => $guideCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuideCategoryRequest $request, GuideCategory $guideCategory)
    {
        $guideCategory->update($request->validated());

        return redirect()->route('admin.guide-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuideCategory $guideCategory)
    {
        $guideCategory->delete();

        return redirect()->route('admin.guide-categories.index');
    }
}
