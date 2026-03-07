<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'homepage'])->name('homepage');
Route::get('/contattaci', [PublicController::class, 'contacts'])->name('contacts');
Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contact.us');
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/{id}', [ArticleController::class, 'show'])->name('articles.show');
