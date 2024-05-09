<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
         $services = Vehicle::get();
        return view('Frontend.services',get_defined_vars());
    }
    public function serviceDetail($id){
        return 'detail Page';
    }
}
