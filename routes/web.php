<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [App\Http\Controllers\welcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/posts/store', [App\Http\Controllers\postController::class, 'store'])->name('posts.store');
Route::get('/posts/{postId}/show', [App\Http\Controllers\postController::class, 'show'])->name('posts.show');
Route::get('/posts/all', [App\Http\Controllers\HomeController::class, 'allPosts'])->name('posts.all');
Route::get('/posts/{postId}/edit', [App\Http\Controllers\postController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{postId}/delete', [App\Http\Controllers\postController::class, 'delete'])->name('posts.delete');
