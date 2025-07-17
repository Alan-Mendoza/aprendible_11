<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
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

    public function create()
    {
        return view('posts.create')->with([
            'post' => new Post // Para crear un nuevo post, pasamos una instancia vacía
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post
        ]);
        // return view('post', ['post' => $post]);
        // return Post::findOrFail($post);
    }

    public function store(SavePostRequest $request)
    {
        // $validated = $request->validated();

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        Post::create($request->validated());

        // session()->flash('status', 'Post created successfully!');

        return to_route('posts.index')->with('status', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with([
            'post' => $post
        ]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        // $validated = $request->validate([
        //     'title' => ['required', 'string', 'min:4'],
        //     'body' => ['required', 'string'],
        // ]);

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();
        $post->update($request->validated());

        // session()->flash('status', 'Post updated successfully!');

        return to_route('posts.index')->with('status', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        // $post->delete();
        Post::destroy($post->id);

        // session()->flash('status', 'Post deleted successfully!');

        return to_route('posts.index')->with('status', 'Post deleted successfully!');
    }
}
