<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('frontend.profile.index', [
            'title' => 'Profil',
        ]);
    }
}
