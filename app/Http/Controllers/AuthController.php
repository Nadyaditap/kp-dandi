<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function proses_login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('message','Signed in');
        }

        return redirect('/')->with('message','Login tidak valid');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Terima Kasih Anda Sudah Login');
    }
}