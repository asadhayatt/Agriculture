<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
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
        $vehicle->user_id =Auth::user()->id;
        $vehicle->image ='Frontend/services/'.$imagename;
        $vehicle->vehiclename =$request->vehiclename;
        $vehicle->duration =$request->duration;
        $vehicle->location =$request->location;
        $vehicle->weight =$request->weight;
        $vehicle->description =$request->description;
        $vehicle->categories =$request->categories;
        $vehicle->contact =$request->contact;
        $vehicle->price =$request->price;
        $vehicle->save();
        alert()->success('Ad Created successfully!','Your Ad is live !');

        
        return redirect()->to('/admin/post-ads');  /* by url return*/
    }
    else {
        alert()->error('Ad Creation failed!','Please Select Image!');
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
    public function showCreateAdPage()
        {
    
            return view('admin.adminTabs.createPost');
        }
    public function editPostAds($id)
    
        {
            $post = Vehicle::find($id);
            return view('admin.adminTabs.editPost', compact('post'));
        }
    

    /**
     * Update the specified resource in storage.
     */
    public function updatePostAds(Request $request, $id)
    {
        $imagename= "";
        $post = Vehicle::find($id);
        $post->vehiclename = $request->input('vehiclename');
        $post->categories = $request->input('categories');
        if($request->hasfile('image')){
            $image = $request->file('image');
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/Frontend/services');
            $image->move($destinationPath, $imagename);
            $post->image = 'Frontend/services/'.$imagename;;
        }
        $post->weight = $request->input('weight');
        $post->price = $request->input('price');
        $post->save();

        return redirect()->to('/admin/post-ads');
    }
    // else{
    //     alert()->error('Ad Creation failed!','Please Select Image!');
    //     return redirect()->back();
    // }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
