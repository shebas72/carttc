<?php

namespace App\Http\Controllers;

use App\Models\Vehicletype;
use Illuminate\Http\Request;

class VehicletypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleTypes = vehicleType::all();

        return view('vehicletype',compact('vehicleTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicleType = new vehicleType();
        

        $vehicleType->model = request('vt_model');
        $vehicleType->make = request('vt_make');
        // $vehicleType->logo = $vt_logo;
       
    

        $vehicleType->save();

        return redirect('/vehicletype');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       


      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicletype $vehicletype)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicletype $vehicletype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicletype $vehicletype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicletype  $vehicletype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicletype $vehicletype)
    {
        //
    }
}
