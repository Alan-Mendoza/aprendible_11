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
// Route::get('blog', [PostController::class, 'index'])->name('posts.index'); // Ruta de controlador tradicional
// Route::get('blog/create', [PostController::class, 'create'])->name('posts.create'); // Ruta de controlador tradicional
// Route::post('blog', [PostController::class, 'store'])->name('posts.store'); // Ruta de controlador tradicional
// Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show'); // Ruta de controlador tradicional
// Route::get('blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Ruta de controlador tradicional
// Route::match(['put', 'patch'], 'blog/{post}', [PostController::class, 'update'])->name('posts.update'); // Ruta de controlador tradicional
// Route::delete('blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Ruta de controlador tradicional

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post'] // Cambiamos el nombre del parámetro de ruta de 'blog' a 'post'
]);

Route::view('nosotros', 'about')->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
