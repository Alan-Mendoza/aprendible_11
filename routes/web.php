<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

$posts = [
    ['title' => 'First Post'],
    ['title' => 'Second Post'],
    ['title' => 'Third Post'],
    ['title' => 'Fourth Post'],
];

Route::view('/', 'welcome')->name('welcome');
Route::view('contacto', 'contact')->name('contact');
// Route::get('blog', PostController::class)->name('blog'); // Ruta de controlador invocable
Route::get('blog', [PostController::class, 'index'])->name('posts.index'); // Ruta de controlador tradicional
Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show'); // Ruta de controlador tradicional

Route::view('nosotros', 'about')->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
