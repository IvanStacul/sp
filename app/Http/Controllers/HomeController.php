<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $news = News::orderBy('publish_date', 'desc')->active()->limit(3)->get();
        return view('index', compact('news'));
    }
}
