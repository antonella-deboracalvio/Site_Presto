<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        $frasi = ["ui.vendi il maglione della nonna", "ui.liberati di quelle vecchie scarpe", "ui.liberati di quel soprammobile", "ui.sbarazzati di quel vecchio peluche", "ui.vendi quel vecchio servizio di pentole"];
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
