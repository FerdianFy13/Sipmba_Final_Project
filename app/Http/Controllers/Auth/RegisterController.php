<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Daftar',
        ]);
    }

    public function register(Request $request)
    {
        $validate = $request->validate([
            'nik' => ['required', 'min:16', 'max:25', 'unique:users'],
            'name' => 'required|max:45',
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:80'],
        ]);

        // $validate['password'] = bcrypt($validate['password']);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        // Move Pages After Filling The Form
        return redirect('/login')->with(
            'success',
            'Registration Successful! Please Do Login'
        );
    }
}
