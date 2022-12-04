<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectController extends Controller
{
    //
    public function cek()
    {
        if (auth()->user()->role_id === 1) {
            return redirect('/dashboard');
        } else {
            return redirect('/home/form-pendaftaran');
        }
    }
}
