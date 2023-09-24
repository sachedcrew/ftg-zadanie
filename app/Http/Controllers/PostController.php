<?php

namespace App\Http\Controllers;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10); 
        return view('welcome', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id); 

        return view('posts.show', compact('post'));
    }
}
