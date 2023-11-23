<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Crypt;
class PostController extends Controller
{
    function index() {
        // $posts = Post::all(); // SELECT * FROM posts

        $posts = Post::paginate(15);

        // dd($posts);
        return view('posts.index', compact('posts'));

    }

    function show(Post $post) {

        return view('posts.show', compact('post'));
    }
}
