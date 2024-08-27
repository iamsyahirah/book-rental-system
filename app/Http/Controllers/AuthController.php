<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            // check status = active
            if (Auth::user()->status != 'active') {
                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet. Please contact admin.');
                return redirect('/login');
            }

            //return redirect()->intended('dashboard');
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid');
        return redirect('/login');
    }
}
