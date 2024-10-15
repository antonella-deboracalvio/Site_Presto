<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

//rotta vista welcome
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

//rotta per il form di creazione dell'articolo
Route::get('/articles/create', [ArticleController::class, 'createArticle'])->name('createArticle'); 

//rotta per mostrare l'articolo selezionato
Route::get('/articles/detail/{article}', [ArticleController::class, 'detailArticle'])->name('detailArticle');

//rotta dell'index di tutti gli articoli inseriti
Route::get('/articles/index', [ArticleController::class, 'indexArticle'])->name('indexArticle'); 

//rotta per mostrare le categorie
Route::get('/category/{category}/detail', [ArticleController::class, 'byCategory'])->name('byCategory');

//rotta per filtro di ricerca testuale
Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('searchArticles');

Route::get('/revisor/index', [RevisorController::class, 'indexRevisor'])->name('indexRevisor')->middleware('isRevisor');

Route::patch('/accept/{article}', [RevisorController::class, 'acceptArticle'])->name('acceptArticle');

Route::patch('/reject/{article}', [RevisorController::class, 'rejectArticle'])->name('rejectArticle');

