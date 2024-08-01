<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

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

    //    $vehicle = new Vehicle();
    //     $vehicle->vehiclename =$request->vehiclename;
    //     $vehicle->type =$request->type;
    //     $vehicle->price =$request->price;
    //     $vehicle->weight =$request->weight;
    //     $vehicle->save();

        // toast('Ad Created Successfully!','success');
        // alert()->error('ErrorAlert','Lorem ipsum dolor sit amet.');
       

        // return $request->all();
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
        alert()->success('Ad Created successfully!','Your Ad is live !');

        
        return redirect('/services');
    }
    else {
        alert()->error('Ad Created Failed!','Something went wrong !');
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
    public function editPostAds($id)
    
        {
            $post = Vehicle::find($id);
            return view('admin.adminTabs.editPost', compact('post'));
        }
    

    /**
     * Update the specified resource in storage.
     */
    public function updatePost(Request $request, $id)
    {
        $post = Vehicle::find($id);
        $post->vehiclename = $request->input('vehiclename');
        $post->type = $request->input('type');
        $post->image = $request->input('image');
        $post->weight = $request->input('weight');
        $post->price = $request->input('price');
        $post->save();
        return redirect()->route('admin.adminTabs.postAds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
