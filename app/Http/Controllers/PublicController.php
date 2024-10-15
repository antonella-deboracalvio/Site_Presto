<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $articles = Article::take(4)->orderBy('created_at', 'desc')->get();
        return view('welcome' , compact('articles'));
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('articles.searchedArticles', ['articles'=>$articles, 'query'=>$query]);
    }

}
