<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class AllArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('all-articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::find($id);

        return view('all-articles.show', compact('article'));
    }
}
