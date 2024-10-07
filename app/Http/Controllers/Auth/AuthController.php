<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15',
        ]);

        if ($validator->fails()) {
            Alert::error('Login Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            toast('Selamat datang admin!', 'success');
            return redirect()->route('dashboard');
        } else {
            Alert::error('Login Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }
    }

    public function logout()
    {
        toast('Berhasil Logout!', 'success');
        Auth::logout();
        return redirect('/');
    }
}
