<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('match-strings');
        }else{
            return view('auth.login');
        }
    }

    public function authenticate(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('match-strings');
        }

        return redirect()->back()->with(['error' => 'Email atau password salah!']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
