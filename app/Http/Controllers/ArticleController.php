<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ArticleController extends Controller implements HasMiddleware
{
    public function createArticle()
    {
        return view('articles.createArticleForm');
    }

    public static function middleware(): array{
        return [
            new Middleware('auth', only: ['createArticle']),
        ];
    }

    public function indexArticle()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('articles.indexArticle', compact('articles'));
    }
    
}
