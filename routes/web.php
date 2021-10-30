<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/posts',[PostController::class, 'index'])->name('posts');
Route::get('/registers', [RegisterController::class, 'index'])->name('register');
Route::post('/registers', [RegisterController::class, 'store'])->name('register');

