<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Botble\Blog\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $post = new Post;

        $post->description = $request->description;
        $post->name = $request->name;

        $post->save();

        return redirect('/posts');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


}
