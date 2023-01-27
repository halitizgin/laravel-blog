<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($slug)
    {
        $post = Post::with(['comments' => function($query){
            $query->orderBy('created_at', 'desc');
        }])->where('slug', $slug)->first();
        return view('post', compact('post'));
    }
}
