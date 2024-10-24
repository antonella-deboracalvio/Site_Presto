<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(6);
        return view('articles.indexArticle', compact('articles'));
    }





    
    public function detailArticle(Article $article)
    {
        if(Article::where('is_accepted', true)->where('category_id', $article->category_id)->count() > 3){
            $suggestions = Article::where('is_accepted', true)->where('category_id', $article->category_id)->where('id', '!=', $article->id)->take(3)->get();
        } else {
            $suggestions = Article::where('is_accepted', true)->where('category_id', $article->category_id)->where('id', '!=', $article->id)->get();
        }

        // dd($article->category->id);

        return view('articles.detailArticle', compact('article'), compact('suggestions'));
    }





    
    public function byCategory(Article $article, Category $category)
    {
        
        //    $articles = Article::where('category_id', $category->id)->get();
        
        $articles = Article::where('is_accepted', true)->where('category_id', $category->id)->paginate(6);
        //    dd($articles)->all();
        return view('articles.byCategory', ['articles'=>$articles, 'category'=>$category]);
    }





    // Ordina per
    
    public function orderByPriceAsc()
    {
        $articles = Article::where('is_accepted', true)->orderBy('price', 'asc')->paginate(6);
        return view('articles.indexArticle', compact('articles'));
    }


    public function orderByPriceDesc()
    {
        $articles = Article::where('is_accepted', true)->orderBy('price', 'desc')->paginate(6);
        return view('articles.indexArticle', compact('articles'));
    }






    public function byCategoryPriceAsc(Article $article, Category $category)
    {
        
        //    $articles = Article::where('category_id', $category->id)->get();
        
        $articles = Article::where('is_accepted', true)->where('category_id', $category->id)->orderBy('price', 'asc')->get();
        //    dd($articles)->all();
        return view('articles.byCategory', ['articles'=>$articles, 'category'=>$category]);
    }

    public function byCategoryPriceDesc(Article $article, Category $category)
    {
        
        //    $articles = Article::where('category_id', $category->id)->get();
        
        $articles = Article::where('is_accepted', true)->where('category_id', $category->id)->orderBy('price', 'desc')->get();
        //    dd($articles)->all();
        return view('articles.byCategory', ['articles'=>$articles, 'category'=>$category]);
    }

    
}