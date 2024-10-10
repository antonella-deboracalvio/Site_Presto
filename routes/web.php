<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

//rotta vista welcome
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

//rotta per il form di creazione dell'articolo
Route::get('/articles/create', [ArticleController::class, 'createArticle'])->name('createArticle'); 

//rotta dell'index di tutti gli articoli inseriti
Route::get('/articles/index', [ArticleController::class, 'indexArticle'])->name('indexArticle'); 

//rotta per mostrare l'articolo selezionato
Route::get('/articles/detail/{article}', [ArticleController::class, 'detailArticle'])->name('detailArticle');


