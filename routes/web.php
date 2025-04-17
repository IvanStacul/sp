<?php

use App\Models\{News, Document};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, OrdinanceController};
// use App\Http\Controllers\ProfileController;

Route::get('/', HomeController::class)->name('home');

Route::get('/noticias/{slug}', function ($slug) {
    $news = News::where('slug', $slug)->firstOrFail();

    if (!$news->is_active) {
        abort(404);
    }

    $recentNews = News::orderBy('publish_date', 'desc')->where('slug', '!=', $slug)->active()->limit(3)->get();

    return view('pages.news.show', compact('news', 'recentNews'));
})->name('news.show');

Route::get('/{year}/{month}/{day}/{slug}', function ($year, $month, $day, $slug) {
    return redirect()->route('news.show', $slug);
})->name('news.show.old');

Route::get('/en-construccion', function () {
    return view('pages.under-construction');
})->name('under-construction');

Route::get('/ordenanzas', [OrdinanceController::class, 'index'])->name('ordinances.index');

Route::get('/noticias', function () {
    return view('pages.news.index', ['news' => News::orderBy('publish_date', 'desc')->active()->paginate(env('PER_PAGE'))]);
})->name('news.index');

Route::get('/docs', function () {
    $docs = Document::with('category')->orderBy('created_at', 'desc')->get();
    return view('pages.docs', compact('docs'));
})->name('docs');

Route::get('/guia-de-tramites', function () {
    return view('pages.guides', ['guides' => \App\Models\Guide::with('category')->orderBy('created_at', 'desc')->get()]);
})->name('guides.index');

Route::get('/serviciosciudadsp', function () {
    return view('pages.services.index');
})->name('services.index');

Route::get('/recoleccion-diferenciada', function () {
    return view('pages.services.residuos');
})->name('services.residuos');

Route::get('/sem', function () {
    return view('pages.services.sem');
})->name('services.sem');

Route::get('/inicio/sem', function () {
    return redirect()->route('services.sem');
})->name('services.sem.home');

Route::get('/recorrido-de-colectivos-urbanos', function () {
    return view('pages.services.sp-bus');
})->name('services.sp.bus');

Route::get('/compostaje-comunitario', function () {
    return view('pages.services.compostaje');
})->name('services.compostaje');

Route::get('/estos-son-los-barrios-de-nuestra-ciudad', function () {
    return redirect()->route('services.catastro');
})->name('services.barrios');

Route::get('/informacion-catastral', function () {
    return view('pages.services.catastro');
})->name('services.catastro');

Route::get('/historia', function () {
    return view('pages.about.history');
})->name('about.history');

Route::get('/institucional', function () {
    return view('pages.institutional.index');
})->name('pages.institutional.index');

Route::get('/intendencia', function () {
    return view('pages.institutional.intendente');
})->name('pages.institutional.intendencia');

Route::get('/secretaria-de-gobierno', function () {
    return view('pages.institutional.secretario-1');
})->name('pages.institutional.secretario-1');

Route::get('/secretaria-de-desarrollo-humano-y-deportes', function () {
    return view('pages.institutional.secretario-2');
})->name('pages.institutional.secretario-2');

Route::get('/secretaria-de-gestion-y-promocion-educativa', function () {
    return view('pages.institutional.secretario-3');
})->name('pages.institutional.secretario-3');

Route::get('/secretaria-de-planificacion-y-control-de-gestion', function () {
    return view('pages.institutional.secretario-4');
})->name('pages.institutional.secretario-4');

Route::get('/secretaria-de-economia', function () {
    return view('pages.institutional.secretario-5');
})->name('pages.institutional.secretario-5');

Route::get('/secretaria-de-cultura-y-educacion-ciudadana', function () {
    return view('pages.institutional.secretario-6');
})->name('pages.institutional.secretario-6');

Route::get('/secretaria-de-servicios-publicos-y-medio-ambiente', function () {
    return view('pages.institutional.secretario-7');
})->name('pages.institutional.secretario-7');

Route::get('/secretaria-de-obras-publicas', function () {
    return view('pages.institutional.secretario-8');
})->name('pages.institutional.secretario-8');

Route::get('/secretaria-de-desarrollo-local-y-economia-social', function () {
    return view('pages.institutional.secretario-9');
})->name('pages.institutional.secretario-9');

Route::get('/secretaria-de-relaciones-institucionales', function () {
    return view('pages.institutional.secretario-10');
})->name('pages.institutional.secretario-10');

Route::get('/secretaria-de-cooperacion-gubernamental', function () {
    return view('pages.institutional.secretario-11');
})->name('pages.institutional.secretario-11');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
