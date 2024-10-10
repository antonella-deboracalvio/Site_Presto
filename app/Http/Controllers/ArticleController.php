<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function createArticle()
    {
        return view('articles.createArticleForm');
    }
}
