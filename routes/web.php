<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/contact-us', [MailController::class, 'contattaci'])->name('mail.contattaci')->middleware('auth');
Route::post('/contact-us/store', [MailController::class, 'store'])->name('mail.store')->middleware('auth');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');
Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');
