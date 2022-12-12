<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BloodComponent;
use App\Models\BloodGroup;
use App\Models\BloodStok;
use Illuminate\Http\Request;

class BloodstockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.blood_input.index', [
            'title' => 'Stok Darah',
            'stock' => BloodStok::with('bloodGroup', 'bloodComponent')->get(),
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
        return view('backend.blood_input.create', [
            'title' => 'Create Stok Darah',
            'group' => BloodGroup::all(),
            'component' => BloodComponent::all(),
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
            'blood_group_id' => ['required'],
            'blood_component_id' => ['required'],
            'sum' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        BloodStok::create($validation);

        return redirect('/stok-darah')->with(
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
