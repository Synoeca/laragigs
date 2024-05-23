<?php

use App\Http\Controllers\LoginUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::resource('/posts', PostController::class);
Route::get('/register', [RegisterUserController::class, 'register']) -> name('register');
Route::post('/register', [RegisterUserController::class, 'store']) -> name('register.store');
Route::get('/login', [LoginUserController::class, 'login']) -> name('login');
Route::post('/login', [LoginUserController::class, 'store']) -> name('login.store');
Route::post('/logout', [LoginUserController::class, 'logout']) -> name('logout');