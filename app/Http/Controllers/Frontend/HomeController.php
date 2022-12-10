<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('frontend.home.index', [
            'title' => 'Beranda',
            'news' => News::with('user')
                ->latest()
                ->paginate(3),
        ]);
    }
}
