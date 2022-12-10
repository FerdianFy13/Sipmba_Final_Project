<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Confirmation;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    //
    public function index()
    {
        return view('frontend.confirmation.index', [
            'title' => 'Formulir Konfirmasi Donor Darah',
            'data' => Confirmation::all(),
        ]);
    }

    public function create(Request $request)
    {
        $validation = $request->validate([
            'value' => 'required',
            'user_id' => 'required',
            // 'token' => $faker->randomNumber(),
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Confirmation::create($validation, [
            // 'token' => $this->faker->numerify('pmi-###'),
        ]);

        return redirect('/antrian')->with('success', 'Pendaftaran berhasil');
    }
}
