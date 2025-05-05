<?php

namespace App\Http\Controllers;
use App\Models\Contact; 
use Illuminate\Http\Request;

class ContactController extends Controller

{
    public function create()
    {
        return view('contact-form'); // show the form
    }

    public function store(Request $request)
    {
        Contact::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
