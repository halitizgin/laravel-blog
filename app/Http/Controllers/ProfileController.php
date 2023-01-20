<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'auth.session']);
    }

    public function index()
    {
        return view('profile');
    }

    public function update_profile(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:10', 'max:30'],
            'email' => ['required', 'email', 'unique:users', 'min:10', 'max:30']
        ]);

        $user = User::find(Auth::user()->id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        return redirect()->route('profile');
    }
}
