<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Post::findOrFail($id);
        return view('post', compact('post'));
    }
}
