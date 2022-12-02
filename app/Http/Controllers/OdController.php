
<?php

namespace App\Http\Controllers;

use App\Models\OfficerData;
use App\Http\Requests\StoreOfficerDataRequest;
use App\Http\Requests\UpdateOfficerDataRequest;

class OfficerDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOfficerDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOfficerDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function show(OfficerData $officerData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function edit(OfficerData $officerData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOfficerDataRequest  $request
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOfficerDataRequest $request, OfficerData $officerData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfficerData  $officerData
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfficerData $officerData)
    {
        //
    }
}
