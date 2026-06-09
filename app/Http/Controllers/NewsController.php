<?php

namespace App\Http\Controllers;

use App\Models\Article;

class NewsController extends Controller
{
    public function index()
    {
        $articles = Article::published()->paginate(9);
        $categories = ['conservation', 'carbone', 'communaute', 'partenariat', 'evenement', 'actualite'];
        return view('news.index', compact('articles', 'categories'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->where('published', true)->firstOrFail();
        $related = Article::published()->where('id', '!=', $article->id)->limit(3)->get();
        return view('news.show', compact('article', 'related'));
    }
}
