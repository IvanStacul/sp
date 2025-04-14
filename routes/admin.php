<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DocumentCategoryController;
use App\Http\Controllers\Admin\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\EditorController;
use App\Http\Controllers\Admin\GuideCategoryController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\ImportWordpressPostsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrdinanceController;

// Route::middleware('auth')->group(function () {
    Route::get('/panel', PanelController::class)->name('panel');

    Route::resource('news', NewsController::class);
    Route::post('/news/{news}/activate', [NewsController::class, 'activate'])->name('news.activate');
    Route::post('/news/{news}/deactivate', [NewsController::class, 'deactivate'])->name('news.deactivate');

    Route::post('upload-image', [EditorController::class, 'uploadImage'])->name('editor.uploadImage');
    Route::post('fetch-image', [EditorController::class, 'fetchImage'])->name('editor.fetchImage');
    Route::post('upload-attachment', [EditorController::class, 'uploadAttachment'])->name('editor.uploadAttachment');

    Route::resource('categories', CategoryController::class);
    Route::resource('ordinances', OrdinanceController::class);
    Route::post('/ordinances/{ordinance}/activate', [OrdinanceController::class, 'activate'])->name('ordinances.activate');
    Route::post('/ordinances/{ordinance}/deactivate', [OrdinanceController::class, 'deactivate'])->name('ordinances.deactivate');

    Route::resource('document-categories', DocumentCategoryController::class);
    Route::resource('documents', DocumentController::class);

    Route::resource('guide-categories', GuideCategoryController::class);
    Route::resource('guides', GuideController::class);
    Route::post('/guides/{guide}/activate', [GuideController::class, 'activate'])->name('guides.activate');
    Route::post('/guides/{guide}/deactivate', [GuideController::class, 'deactivate'])->name('guides.deactivate');

    Route::get('/import-wordpress', [ImportWordpressPostsController::class, 'create'])->name('import-wordpress');
// });
