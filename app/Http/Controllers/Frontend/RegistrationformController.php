<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationformController extends Controller
{
    //
    public function index()
    {
        return view('frontend.registration_form.index', [
            'title' => 'Formulir Pendaftaran Donor',
        ]);
    }
}