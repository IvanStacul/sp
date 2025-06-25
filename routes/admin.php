<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{CategoryController, DocumentCategoryController, DocumentController, EdictController, PanelController, EditorController, GuideCategoryController, GuideController, ImportWordpressPostsController, NewsController, OrdinanceController};

Route::middleware('auth')->group(function () {
    Route::get('/panel', PanelController::class)->name('panel');

    Route::resource('news', NewsController::class);
    Route::post('/news/{news}/activate', [NewsController::class, 'activate'])->name('news.activate');
    Route::post('/news/{news}/deactivate', [NewsController::class, 'deactivate'])->name('news.deactivate');

    Route::resource('edicts', EdictController::class);
    Route::patch('/edicts/{edict}/activate', [EdictController::class, 'activate'])->name('edicts.activate');
    Route::patch('/edicts/{edict}/deactivate', [EdictController::class, 'deactivate'])->name('edicts.deactivate');

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
});
