<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Article::published()->limit(3)->get();
        return view('home', compact('latestNews'));
    }
}
