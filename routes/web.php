<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/articles/create', [ArticleController::class, 'createArticle'])->name('createArticle'); 