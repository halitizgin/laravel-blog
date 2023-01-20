<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordConfirmController extends Controller
{
    public function index()
    {
        return view('auth.password-confirm');
    }

    public function confirm(Request $request)
    {
        if (!Hash::check($request->password, Auth::user()->password))
        {
            return back()->withErrors([
                'password' => ['The provided password does not match our records!']
            ]);
        }

        $request->session()->passwordConfirmed();

        return redirect()->intended();
    }
}
