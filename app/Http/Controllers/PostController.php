<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(2);
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

    public function show(Post $post)
    {
       return view('blog.show', compact('post'));
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
