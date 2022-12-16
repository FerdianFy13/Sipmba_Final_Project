<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BloodRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqa1 = DB::table('blood_requests')->sum('blooda1');
        $reqa2 = DB::table('blood_requests')->sum('blooda2');

        // blood type B
        $reqb1 = DB::table('blood_requests')->sum('bloodb1');
        $reqb2 = DB::table('blood_requests')->sum('bloodb2');

        // blood type AB
        $reqab1 = DB::table('blood_requests')->sum('bloodc1');
        $reqab2 = DB::table('blood_requests')->sum('bloodc2');

        // blood type O
        $reqo1 = DB::table('blood_requests')->sum('bloodd1');
        $reqo2 = DB::table('blood_requests')->sum('bloodd2');
        //
        return view('backend.blood_request.index', [
            'title' => 'Data Permintaan Darah',
            'result' =>
                $reqa1 +
                $reqa2 +
                $reqb1 +
                $reqb2 +
                $reqab1 +
                $reqab2 +
                $reqo1 +
                $reqo2,
            'blood_request' => BloodRequest::with('user')
                ->orderBy('date', 'desc')
                ->paginate(10),
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
        return view('backend.blood_request.create', [
            'title' => 'Create Data Permintaan Darah',
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
            'hospital' => ['required'],
            'name_request' => ['required'],
            'name_officer' => ['required'],
            'call_officer' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'sum' => ['required'],
            'blooda1' => ['required'],
            'blooda2' => ['required'],
            'bloodb1' => ['required'],
            'bloodb2' => ['required'],
            'bloodc1' => ['required'],
            'bloodc2' => ['required'],
            'bloodd1' => ['required'],
            'bloodd2' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        BloodRequest::create($validation);

        return redirect('/data-permintaan-darah')->with(
            'success',
            'New Post created successfully add'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = BloodRequest::findOrFail($id);

        return view('backend.blood_request.show', [
            'title' => 'Detail Data Permintaan Darah',
            'bloods' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = BloodRequest::findOrFail($id);

        return view('backend.blood_request.update', [
            'title' => 'Update Data Permintaan Darah',
            'bloods' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validation = [
            'hospital' => ['required'],
            'name_request' => ['required'],
            'name_officer' => ['required'],
            'call_officer' => ['required'],
            'date' => ['required'],
            'time' => ['required'],
            'sum' => ['required'],
            'blooda1' => ['required'],
            'blooda2' => ['required'],
            'bloodb1' => ['required'],
            'bloodb2' => ['required'],
            'bloodc1' => ['required'],
            'bloodc2' => ['required'],
            'bloodd1' => ['required'],
            'bloodd2' => ['required'],
        ];

        $validationData = $request->validate($validation);

        BloodRequest::whereId($id)->update($validationData);

        return redirect('/data-permintaan-darah')->with(
            'update',
            'Blood Donor Request successfully update'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BloodRequest  $bloodRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bloods = BloodRequest::findOrFail($id);
        $bloods->delete();
        return redirect('data-permintaan-darah')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
