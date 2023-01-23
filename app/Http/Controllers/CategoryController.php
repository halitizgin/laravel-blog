<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->paginate(9);
        return view('category', compact('category', 'posts'));
    }
}
