<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view('posts', ['posts'=> $posts]);
    }
}
