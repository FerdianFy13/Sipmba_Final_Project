<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodDonorInput;
use App\Models\Category;
use Illuminate\Http\Request;

class FormregisController extends Controller
{
    //
    public function index()
    {
        //
        return view('frontend.form.create', [
            'title' => 'Formulir Identitas Diri',
            'categories' => Category::all(),
            'blood' => BloodDonorInput::all(),
        ]);
    }

    public function form(Request $request)
    {
        $validation = $request->validate([
            'category_id' => 'required',
            'nik' => ['required'],
            'name' => ['required'],
            'born' => ['required'],
            'day' => ['required'],
            'age' => ['required'],
            'job' => ['required'],
            'call' => ['required'],
            'place' => ['required'],
            // 'option1' => ['required'],
            // 'option2' => ['required'],
            // 'option3' => ['required'],
            // 'date' => ['required'],
            // 'token' => $faker->randomNumber(),
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        BloodDonorInput::create($validation, [
            // 'token' => $this->faker->numerify('pmi-###'),
        ]);

        return redirect('/kuisioner1')->with(
            'success',
            'Formulir identitas diri berhasil ditambahkan'
        );
    }
}
