<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function indexRevisor()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('article_to_check'));
    }

    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()
        ->back()
        ->with("message", "L'articolo $article->title è stato approvato");
    }

    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()
        ->back()
        ->with("message", "L'articolo $article->title è stato rifiutato");
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('welcome')->with('message', 'Richiesta per diventare revisore inviata');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);

        return redirect()->back();
    }
}
