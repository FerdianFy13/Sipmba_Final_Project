<?php

namespace App\Http\Controllers;

use App\Models\Kuizioner;
use App\Http\Requests\StoreKuizionerRequest;
use App\Http\Requests\UpdateKuizionerRequest;

class KuizionerController extends Controller
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
     * @param  \App\Http\Requests\StoreKuizionerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKuizionerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuizioner  $kuizioner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuizioner $kuizioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuizioner  $kuizioner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuizioner $kuizioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKuizionerRequest  $request
     * @param  \App\Models\Kuizioner  $kuizioner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKuizionerRequest $request, Kuizioner $kuizioner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuizioner  $kuizioner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuizioner $kuizioner)
    {
        //
    }
}
