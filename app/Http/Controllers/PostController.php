<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Post::with(['comments' => function($query){
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($id);
        return view('post', compact('post'));
    }
}
