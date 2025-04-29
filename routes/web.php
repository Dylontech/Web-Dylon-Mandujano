<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

// Ruta principal
Route::get('/', function () {
    return view('home'); // Cambié a 'home' ya que parece ser la intención final
})->name('home'); // Agregamos el nombre 'home'

// Rutas relacionadas con el blog
Route::resource('blog', PostController::class)->only(['index', 'show']);

// Ruta adicional para el blog (si es necesario)
Route::get('/blog', [PostController::class, 'index'])->name('blog.index');