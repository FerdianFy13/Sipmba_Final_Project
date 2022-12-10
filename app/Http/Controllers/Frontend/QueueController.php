<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    //
    public function index()
    {
        return view('frontend.queue.index', [
            'title' => 'Nomor Antrian Donor Darah',
        ]);
    }
}
