<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\DocumentCategory;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.documents.index', [
            'documents' => Document::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.create', [
            'document' => new Document(),
            'categories' => DocumentCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('documents');
        }

        Document::create($validated);

        return redirect()->route('admin.documents.index')->
            with('success', __('documents.messages.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('admin.documents.edit', [
            'document' => $document,
            'categories' => DocumentCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        if ($request->hasFile('file')) {
            $document->deleteFile();
            $document->file = $request->file('file')->store('documents');
        }

        $document->update($request->validated());

        return redirect()->route('admin.documents.index')->
            with('success', __('documents.messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('admin.documents.index')->
            with('success', __('documents.messages.delete'));
    }
}
