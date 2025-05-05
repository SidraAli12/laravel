<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
 {
public function create()
{
    return view('student-form');  // for loading a form data 
}

public function store(Request $request)
{
    Student::create([ // through student model its gonna save student info
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
     // redirect the form with succcses msg 
    return redirect()->back()->with('success', 'Student saved!');
}
 }
