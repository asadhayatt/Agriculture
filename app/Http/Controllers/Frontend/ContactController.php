<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('Frontend.contact');
    }

    public function storeContact(Request $request)
    {
       $contact = new ContactUs();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->message = $request->message;
       $contact->status = 1;
       $contact->save();

       return redirect()->to('/contact');
    }
}
