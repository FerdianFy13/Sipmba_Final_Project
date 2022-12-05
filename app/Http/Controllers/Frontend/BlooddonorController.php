<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlooddonorController extends Controller
{
    //
    public function procedure()
    {
        return view('frontend.blood_donor.procedure', [
            'title' => 'Prosedur & Syarat Donor',
        ]);
    }

    public function information()
    {
        return view('frontend.blood_donor.information', [
            'title' => 'Informasi Stok Darah',
        ]);
    }

    public function schedule()
    {
        return view('frontend.blood_donor.schedule', [
            'title' => 'Jadwal Mobilisasi Donor',
        ]);
    }

    public function flow()
    {
        return view('frontend.blood_donor.flow', [
            'title' => 'Alur Permintaan Darah',
        ]);
    }
}
