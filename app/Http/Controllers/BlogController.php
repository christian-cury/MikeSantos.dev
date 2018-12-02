<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

    public function home() {
        $posts = Post::paginate(1);
        return vieW('blog.home', compact('posts'));
    }
}
