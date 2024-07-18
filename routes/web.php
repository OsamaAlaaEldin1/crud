<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::resource('posts', PostController::class);

// Create a new post
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

// Store a newly created post
Route::post('posts', [PostController::class, 'store'])->name('posts.store');

// Display a specific post
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Edit a specific post
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Update a specific post
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Delete a specific post
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');