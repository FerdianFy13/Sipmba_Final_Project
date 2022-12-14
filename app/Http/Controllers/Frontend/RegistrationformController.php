<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BloodDonorInput;
use App\Models\Category;
use Illuminate\Http\Request;

class RegistrationformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.form.create', [
            'title' => 'Formulir Pendaftaran Donor',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.form.create', [
            'title' => 'Create Data Pendonor',
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            // 'token' => $faker->randomNumber(),
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        BloodDonorInput::create($validation, [
            // 'token' => $this->faker->numerify('pmi-###'),
        ]);

        return redirect('/form-pendaftaran')->with(
            'success',
            'Formulir pendaftaran berhasil ditamabahkan'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
