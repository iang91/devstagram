<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('principal', ['name' => 'Inicio']);
});
Route::get('/crear-cuenta', [RegisterController::class, 'index']);
Route::post('/crear-cuenta', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogOutController::class, 'store'])->name('logout');

//Route::get('/muro', [PostController::class, 'index'])->name('posts.index');
Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/{user:username}/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::post('/{user:username}/posts/{post}', [ComentarioController::class, 'store'])->name('comentarios.store');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/images', [ImagenController::class, 'store'])->name('imagen.store');

// like a las  fotos
Route::post('/posts/{post}/likes', [LikeController::class, 'store'])->name('post.likes.store');

Route::delete('/posts/{post}/likes', [LikeController::class, 'destroy'])->name('post.likes.destroy');

