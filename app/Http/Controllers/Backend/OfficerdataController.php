<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\OfficerData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfficerdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.officer_data.index', [
            'title' => 'Data Petugas',
            'datapetugas' => OfficerData::all(),
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
        return view('backend.officer_data.create', [
            'title' => 'Create Data Petugas',
            'categories' => Category::all(),
            'data' => OfficerData::all(),
            // 'gen' => ['Pria', 'Wanita', 'Pilihan'],
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
            'name' => ['required', 'min:5'],
            'slug' => ['required', 'max:255', 'min:2'],
            'nik' => 'required|min:14',
            'pmi_id' => 'required|min:4',
            'born' => ['required'],
            'date' => ['required'],
            'category_id' => ['required'],
            'alamat' => 'required|min:5',
            'email' => ['required', 'email:dns'],
            'telepon' => ['required', 'min:5'],
            'job' => ['required'],
            'image' => 'image|file|max:10120|mimes:png,jpg,jpeg',
        ]);

        if ($request->file('image')) {
            $validation['image'] = $request
                ->file('image')
                ->store('officer-data-images');
        }

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        OfficerData::create($validation);

        return redirect('/data-petugas')->with(
            'success',
            'New Officer Data created successfully add'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = OfficerData::findOrFail($id);

        return view('backend.officer_data.show', [
            'title' => 'Show Data Petugas',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = OfficerData::findOrFail($id);
        return view('backend.officer_data.update', [
            'title' => 'Update Data Petugas',
            'categories' => Category::all(),
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validation = [
            'name' => ['required', 'min:5'],
            'slug' => ['required', 'max:255', 'min:2'],
            'nik' => 'required|min:14',
            'pmi_id' => 'required|min:4',
            'born' => ['required'],
            'date' => ['required'],
            'category_id' => ['required'],
            'alamat' => 'required|min:5',
            'email' => ['required', 'email:dns'],
            'telepon' => ['required', 'min:5'],
            'job' => ['required'],
            'image' => 'image|file|max:10120|mimes:png,jpg,jpeg',
        ];

        $validationData = $request->validate($validation);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validationData['image'] = $request
                ->file('image')
                ->store('officer-data-images');
        }

        OfficerData::whereId($id)->update($validationData);

        return redirect('/data-petugas')->with(
            'update',
            'Officer Data successfully update'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = OfficerData::findOrFail($id);
        $data->delete();
        return redirect('data-petugas')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
