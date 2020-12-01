<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('posts/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('posts', [App\Http\Controllers\PostController::class, 'store']);
Route::get('posts/{posts}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::get('posts/{posts}', [App\Http\Controllers\PostController::class, 'show']);
Route::put('posts/{posts}', [App\Http\Controllers\PostController::class, 'update']);
Route::delete('posts/{posts}', [App\Http\Controllers\PostController::class, 'destroy']);