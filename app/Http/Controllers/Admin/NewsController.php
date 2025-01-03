<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index', [
            'news' => News::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create', [
            'news' => new News(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->validated();

        $validated['cover_image'] = $request->file('cover_image')->store('news');

        $news = News::create($validated);

        return redirect()->route('admin.news.index')->with('message', __('news.messages.create'));
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('news');
        }

        unset($validated['slug']); // Slug is not updated

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('message', __('news.messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('message', __('news.messages.delete'));
    }

    /**
     * Activate the specified resource.
     */
    public function activate(News $news)
    {
        $news->update(['is_active' => true]);

        return redirect()->route('admin.news.index')->with('message', __('news.messages.activate'));
    }

    /**
     * Deactivate the specified resource.
     */
    public function deactivate(News $news)
    {
        $news->update(['is_active' => false]);

        return redirect()->route('admin.news.index')->with('message', __('news.messages.deactivate'));
    }
}
