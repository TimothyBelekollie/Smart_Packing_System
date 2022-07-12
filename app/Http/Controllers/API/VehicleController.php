<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $Vehicles = Vehicle::all();
        $response = [
            'Vehicles' => $Vehicles,
        ];
        return response($response, 201);

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
        $rules=array(

            'lessonPlate' => 'required',
            'driverName' => "required",

            'driverContact' => 'required'

        );
        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json($validate->errors(),401 );
        }
        else{
            $storeVehicle=new Vehicle();
          $storeVehicle->lessonPlate=$request->lessonPlate;
          $storeVehicle->driverName=$request->driverName;
          $storeVehicle->driverContact=$request->driverContact;
           $storeVehicle->save();

            if($storeVehicle){
                return["result"=>"Data saved successfully"];
            }else{
                return["result"=>"Unfortunately operation fail"];
            }
    }}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $showVehicle=Vehicle::find($vehicle);

        if ($showVehicle) {
            $response = [
                'message' => 'success',
                'Vehicle' => $showVehicle
            ];
            return response($response, 201);
        } else {
            return response([
                'message' => 'No Vehicle Found'
            ], 404);
        }
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
        $rules=array(

            'lessonPlate' =>'required|unique:vehicles,lessonPlate',
            'driverName' =>"required",

            'driverContact' =>'required'

        );
        $validate=Validator::make($request->all(),$rules);
        if($validate->fails()){
            return response()->json($validate->errors(),401 );
        }
        else{
          $storeVehicle=Vehicle::find($vehicle->id);
          $storeVehicle->lessonPlate=$request->lessonPlate;
          $storeVehicle->driverName=$request->driverName;
          $storeVehicle->driverContact=$request->driverContact;
          $update= $storeVehicle->save();

            if($update){
                return["result"=>"Data updated successfully"];
            }else{
                return["result"=>"Unfortunately operation fail"];
            }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle){
    $deleteVehicles = Vehicle::find($vehicle->id);
    if ($deleteVehicles) {
        $Data = $deleteVehicles->delete();
        if ($Data) {
            $response = [
                'message' => 'Vehicle Deleted'
            ];
            return response($response, 201);
        } else {
            return response([
                'message' => 'These operation has failed'
            ], 404);
        }
    } else {
        return response([
            'message' => 'No Vehicle Found'
        ], 404);
    }

}

    }
