<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $frasi = ['Vendi il maglione della nonna', 'Liberati di quelle vecchie scarpe', 'Liberati di quel soprammobile', 'Sbarazzati di quel vecchio peluche', 'Vendi quel vecchio servizio di pentole'];
        $fraseScelta = $frasi[array_rand($frasi)];
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome' , compact('articles'), ['frase' => $fraseScelta]);
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::search($query)->where('is_accepted', true)->paginate(10);
        return view('articles.searchedArticles', ['articles'=>$articles, 'query'=>$query]);
    }
    
    public function setLanguage($lang)
    {
       session()->put('locale', $lang);
       return redirect()->back();
    }

}
