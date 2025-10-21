<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 artikel terbaru (ubah sesuai kebutuhan)
        $articles = Article::latest()->take(3)->get();

        return view('home', compact('articles'));
    }
}
