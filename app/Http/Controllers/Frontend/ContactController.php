<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContctUs;
use App\Mail\ThankYouMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    //    send the contact us mail to admin
    Mail::to('info@agriconnect.com')->send(new ContctUs($contact));
    //    send the thank you mail to user
    Mail::to($request->email)->send(new ThankYouMail($contact));

       return redirect()->to('/contact');
    }
}
