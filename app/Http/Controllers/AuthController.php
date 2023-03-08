<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ],[
            'email.required' => 'Harap mengisi alamat :attribute anda',
            'email.email' => 'Email harus sesuai dengan dns yang ada',
            'password.required' => 'Harap Isi Password Anda',
            'password.min' => ':attribute kurang panjang'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/beranda')->with('message', 'Berhasil Melakukan login');
        } else if (Auth::check()) {
            return redirect('/beranda');
        }

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            return redirect()->intended('/beranda')->with('loginOk', 'Selamat Berhasil Login');

        } elseif (Auth::check()) {

            return redirect('/beranda');
            
        }
        // session()->flash('message', 'Tidak Dapat Menemukan Akun');

        // return redirect('/register');
        // return response()->json([
        //     $data = 'Not Found'
        // ], 404);

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
            'password' => $ValidateData['password'],
        ]);

        if ($user) {
            return redirect('/')->with('message', 'Registrasi Berhasil, Silahkan Login');
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
