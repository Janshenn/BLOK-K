<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|max:255',
            'content' => 'required',
            'image'   => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $path = $request->hasFile('image')
            ? $request->file('image')->store('articles', 'public')
            : null;

        Article::create([
            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $path,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('articles.index')->with('success', 'Artikel berhasil ditambahkan!');
    }
}
