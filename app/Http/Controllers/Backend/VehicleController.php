<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        return view('Backend.vehicle');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      $imagename= ""; 
    if($request->hasfile('image')){
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension(); 
        $destinationPath = public_path('/Frontend/services');
        $image->move($destinationPath, $imagename);

        $vehicle = new Vehicle();
        $vehicle->vehiclename =$request->vehiclename;
        $vehicle->type =$request->type;
        $vehicle->image ='Frontend/services/'.$imagename;
        $vehicle->price =$request->price;
        $vehicle->weight =$request->weight;
        $vehicle->save();
        return redirect('/services');
    } 
    else {
        return redirect()->back();
    }
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
