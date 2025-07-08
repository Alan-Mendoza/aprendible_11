<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __invoke() // Controlador eficiente si es que solo tienes un solo método
    //     // Si tienes más de un método, es mejor usar un controlador tradicional
    //     // y definir los métodos como index, show, create, store, edit, update, destroy
    // {
    //     $posts = [
    //         ['title' => 'First Post'],
    //         ['title' => 'Second Post'],
    //         ['title' => 'Third Post'],
    //         ['title' => 'Fourth Post'],
    //     ];

    //     return view('blog', compact('posts'));
    // }

    public function index()
    {
        $posts = [
            ['title' => 'First Post'],
            ['title' => 'Second Post'],
            ['title' => 'Third Post'],
            ['title' => 'Fourth Post'],
        ];

        return view('blog', compact('posts'));
    }
}
