<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.index', compact('posts'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(CreatePostRequest $request)
    {
        $post = new Post;
        $post->fill($request->all());
        $post->user()->associate($request->user());
        $post->save();

        return redirect('/');
    }
}
