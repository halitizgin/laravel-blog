<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with(['comments', 'category', 'user'])->paginate(21);

        return view('home', compact('posts'));
    }
}
