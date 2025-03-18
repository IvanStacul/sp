<?php

namespace App\Http\Controllers\Admin;

use App\Models\DocumentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDocumentCategoryRequest;
use App\Http\Requests\UpdateDocumentCategoryRequest;

class DocumentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.document-categories.index', [
            'documentCategories' => DocumentCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.document-categories.create', [
            'documentCategory' => new DocumentCategory(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentCategoryRequest $request)
    {
        DocumentCategory::create($request->validated());

        return redirect()->route('admin.document-categories.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DocumentCategory $documentCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocumentCategory $documentCategory)
    {
        return view('admin.document-categories.edit', [
            'documentCategory' => $documentCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentCategoryRequest $request, DocumentCategory $documentCategory)
    {
        $documentCategory->update($request->validated());

        return redirect()->route('admin.document-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocumentCategory $documentCategory)
    {
        $documentCategory->delete();

        return redirect()->route('admin.document-categories.index');
    }
}
