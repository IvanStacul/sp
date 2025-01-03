<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdinanceController;
// use App\Http\Controllers\ProfileController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/news/{slug}', function ($slug) {
    $news = News::where('slug', $slug)->firstOrFail();

    if (!$news->is_active) {
        abort(404);
    }

    $recentNews = News::orderBy('publish_date', 'desc')
        ->where('slug', '!=', $slug)
        ->active()
        ->limit(3)
        ->get();

    return view('pages.news.show', compact('news', 'recentNews'));
})->name('news.show');

Route::get('/ordenanzas', [OrdinanceController::class, 'index'])->name('ordinances.index');

Route::get('/news', function () {
    return view('pages.news.index', ['news' => News::orderBy('publish_date', 'desc')->active()->paginate(env('PER_PAGE'))]);
})->name('news.index');

Route::get('/docs', function () {
    return view('pages.docs');
})->name('docs');

Route::get('/servicios', function () {
    return view('pages.services.index');
})->name('services.index');

Route::get('/luminarias', function () {
    return view('pages.services.luminarias');
})->name('services.luminarias');

Route::get('/historia', function () {
    return view('pages.about.history');
})->name('about.history');

Route::get('/institucional', function () {
    return view('pages.institutional.index');
})->name('pages.institutional.index');

Route::get('/institucional/autoridades', function () {
    return view('pages.institutional.secretary-1');
})->name('pages.institutional.secretary-1');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
