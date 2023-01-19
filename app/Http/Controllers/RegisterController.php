<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'min:10', 'max:30', 'unique:users'],
            'name' => ['required', 'min:10', 'max:30'],
            'password' => ['required', 'min:6', 'max:30', 'same:password_confirmation']
        ]);

        $user = User::create($credentials);

        Auth::login($user);

        return redirect()->route('home');
    }
}
