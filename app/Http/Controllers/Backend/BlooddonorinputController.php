<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BloodDonorInput;
use App\Models\Category;
use Illuminate\Http\Request;
use Faker\Generator;
use Illuminate\Container\Container;
use Faker\Factory as Faker;
use Faker\Factory;

// namespace Database\Factories;

class BlooddonorinputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.donor_data.index', [
            'title' => 'Data Pendonor',
            'blood' => BloodDonorInput::with('category')->paginate(10),
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
        return view('backend.donor_data.create', [
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
    public function store(Request $request, Faker $faker)
    {
        //
        // $faker = Faker::create();
        // $faker = Container::getInstance()->make(Generator::class);
        // protected string $model = BloodDonorInput::class;
        // $faker = Factory();

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
            'option1' => ['required'],
            'option2' => ['required'],
            'option3' => ['required'],
            'date' => ['required'],
            // 'token' => $faker->randomNumber(),
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        BloodDonorInput::create($validation, [
            // 'token' => $this->faker->numerify('pmi-###'),
        ]);

        return redirect('/data-pendonor')->with(
            'success',
            'New Post created successfully add'
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
        $blood = BloodDonorInput::findOrFail($id);
        return view('backend.donor_data.show', [
            'title' => 'Detail Data Pendonor',
            'blood' => $blood,
            'categories' => Category::all(),
        ]);
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
        $blood = BloodDonorInput::findOrFail($id);
        return view('backend.donor_data.update', [
            'title' => 'Update Data Pendonor',
            'blood' => $blood,
            'categories' => Category::all(),
        ]);
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
        $validation = $request->validate([
            'category_id' => ['required'],
            'nik' => ['required'],
            'name' => ['required'],
            'born' => ['required'],
            'day' => ['required'],
            'age' => ['required'],
            'job' => ['required'],
            'call' => ['required'],
            'place' => ['required'],
            'option1' => ['required'],
            'option2' => ['required'],
            'option3' => ['required'],
            'date' => ['required'],
            // 'token' => $faker->randomNumber(),
        ]);

        BloodDonorInput::whereId($id)->update($validation);

        return redirect('/data-pendonor')->with(
            'update',
            'Data donor successfully update'
        );
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
        $blood = BloodDonorInput::findOrFail($id);
        $blood->delete();
        return redirect('data-pendonor')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
