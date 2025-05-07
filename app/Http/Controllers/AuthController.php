<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'putri@gmail.com' && $password === 'putri123') {

        $request->session()->put('user', $email);
        return redirect('/dashboard');
    } else {
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
}
