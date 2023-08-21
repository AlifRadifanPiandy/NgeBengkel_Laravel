<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'vehicle_type' => 'required',
            'transmission' => 'required',
            'license_number_plate' => 'required'
        ]);

        $vehicle = new Vehicle([
            'id_user' => $request->get('user_id'),
            'name' => $request->get('name'),
            'vehicle_type' => $request->get('vehicle_type'),
            'transmission' => $request->get('transmission'),
            'license_plate' => $request->get('license_number_plate')
        ]);
        

        $vehicle->save();

        return redirect('/')->with('success', 'Vehicle saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'vehicleName' => 'required',
            'vehicleType' => 'required',
            'vehicleTransmission' => 'required',
            'vehicleLicensePlate' => 'required'
        ]);
        $vehicle = Vehicle::find($vehicle->id);
        $vehicle->name = $request->get('vehicleName');
        $vehicle->vehicle_type = $request->get('vehicleType');
        $vehicle->transmission = $request->get('vehicleTransmission');
        $vehicle->license_plate = $request->get('vehicleLicensePlate');
        $vehicle->save();

        return redirect('/')->with('success', 'Vehicle updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $vehicle = Vehicle::find($id);
            $vehicle->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->errorInfo[1] == 1451){
                return redirect('/')->with('error', 'Vehicle cannot be deleted because it is used in another table!');
            }else{
                throw $e;
            }
        }
        return redirect('/')->with('success', 'Vehicle deleted!');
    }
}