<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\{CategoryController, DocumentCategoryController, DocumentController, EdictController, HistoricalCategoryController, HistoricalCommentController, HistoricalItemController, PanelController, EditorController, GuideCategoryController, GuideController, ImportWordpressPostsController, NewsController, OrdinanceController, ShopController};

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

    // Shops (Comercios)
    Route::resource('shops', ShopController::class);
    Route::post('/shops/{shop}/toggle-status', [ShopController::class, 'toggleStatus'])->name('shops.toggle-status');

    // Historical Items (Archivo Histórico)
    Route::resource('historical-categories', HistoricalCategoryController::class);
    Route::post('/historical-categories/{historicalCategory}/activate', [HistoricalCategoryController::class, 'activate'])->name('historical-categories.activate');
    Route::post('/historical-categories/{historicalCategory}/deactivate', [HistoricalCategoryController::class, 'deactivate'])->name('historical-categories.deactivate');

    Route::resource('historical-items', HistoricalItemController::class);
    Route::post('/historical-items/{historicalItem}/activate', [HistoricalItemController::class, 'activate'])->name('historical-items.activate');
    Route::post('/historical-items/{historicalItem}/deactivate', [HistoricalItemController::class, 'deactivate'])->name('historical-items.deactivate');

    // Rutas para gestión de archivos de items históricos
    Route::delete('/historical-items/files/{file}', [HistoricalItemController::class, 'deleteFile'])->name('historical-items.files.delete');
    Route::post('/historical-items/files/{file}/featured', [HistoricalItemController::class, 'setFeaturedFile'])->name('historical-items.files.featured');
    Route::patch('/historical-items/files/{file}/update-name', [HistoricalItemController::class, 'updateFileName'])->name('historical-items.files.update-name');

    // Historical Comments (Moderación de Comentarios)
    Route::get('/historical-comments', [HistoricalCommentController::class, 'index'])->name('historical-comments.index');
    Route::patch('/historical-comments/{historicalComment}/approve', [HistoricalCommentController::class, 'approve'])->name('historical-comments.approve');
    Route::patch('/historical-comments/{historicalComment}/reject', [HistoricalCommentController::class, 'reject'])->name('historical-comments.reject');
    Route::delete('/historical-comments/{historicalComment}', [HistoricalCommentController::class, 'destroy'])->name('historical-comments.destroy');
    Route::post('/historical-comments/bulk-approve', [HistoricalCommentController::class, 'bulkApprove'])->name('historical-comments.bulk-approve');
    Route::delete('/historical-comments/bulk-delete', [HistoricalCommentController::class, 'bulkDelete'])->name('historical-comments.bulk-delete');

    Route::get('/import-wordpress', [ImportWordpressPostsController::class, 'create'])->name('import-wordpress');

    // Ruta para ejecutar Artisan commands
    Route::get('/deploy', function () {
        Artisan::call('migrate', ['--force' => true]);
        Artisan::call('db:seed', ['--class' => 'ShopSeeder']);
        return response()->json([
            'success' => true,
            'message' => 'Migraciones ejecutadas y ShopSeeder corrido exitosamente'
        ]);
    })->name('deploy');
});
