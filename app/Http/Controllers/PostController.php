<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // public function index()
    // {
    //     // $posts = [
    //     //     ['title' => 'First Post'],
    //     //     ['title' => 'Second Post'],
    //     //     ['title' => 'Third Post'],
    //     //     ['title' => 'Fourth Post'],
    //     // ];

    //     // Ahora con base de datos
    //     $posts = DB::table('posts')->get();

    //     return view('blog', compact('posts'));
    // }

    public function index()
    {
        // Ahora con Eloquent ORM
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {

        return view('posts.show')->with([
            'post' => $post
        ]);
        // return view('post', ['post' => $post]);
        // return Post::findOrFail($post);
    }
}
