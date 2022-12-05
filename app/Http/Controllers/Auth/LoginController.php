<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Masuk',
        ]);
    }

    public function login(Request $request)
    {
        $validator = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:80'],
        ]);

        // $validator['password'] = bcrypt($validator['password']);

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/home/form-pendaftaran');
            }
        }

        return back()->with('failed', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
