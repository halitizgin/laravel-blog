<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        $posts = $user->posts()->paginate(9);
        return view('user', compact('user', 'posts'));
    }
}
