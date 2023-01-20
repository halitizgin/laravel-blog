<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function update_password(Request $request)
    {
        $validated = $request->validate([
            'old_password' => ['required'],
            'password' => ['required_with:password_confirmation', 'same:password_confirmation', 'min:6', 'max:30']
        ]);

        if (!Hash::check($validated['old_password'], Auth::user()->password))
        {
            return back()->withErrors([
                'old_password' => ['The provided old password does not match our records']
            ]);
        }

        $user = User::find(Auth::user()->id);
        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('profile');
    }
}
