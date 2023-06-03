<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function login_act(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home')->with('login-success');
        } else if (Auth::check()) {
            return redirect('/home');
        }

        return redirect('/')->with('error', 'Login Failed, Something Wrong');
    }

    public function register_act(Request $request)
    {
        $ValidateData = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = User::create([
            'name' => $ValidateData['name'],
            'email' => $ValidateData['email'],
            'password' => Hash::make($ValidateData['password']),
        ]);

        if ($user) {
            return redirect('/')->with('registered');
        } else {
            return redirect('/register')->with('message', 'Terjadi kesalahan');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
