<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function send()
    {
        $data = request()->validate([
            'name'    => 'required|min:3',
            'email'   => 'required|email',
            'message' => 'required|min:5',


        ]);
       Mail::to('azizboujaada6@gmail.com')->send(new ContactUs($data));//Ay gmail biti iji fih msg diro hna.
       // dd('sent');
       // $job = (new ContactUsJob($data));
       // dispatch($job);
        return redirect()->back()->with('success','Message sent successfully','text-red');

    }
}
