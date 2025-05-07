<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentClass;

class ClassController extends Controller
{
    public function create() {
        return view('class_form'); // Returns the 'class_form.blade.php' view
    }


// Store the new class data in the database (POST request)
    public function store(Request $request) {
        $class = new StudentClass();
        $class->name = $request->class_name;
        $class->save();
        return redirect()->route('class.index'); // Redirect to the class list page
    }
     // i am using this method for show all classes
    public function index() {
        $classes = StudentClass::all();
        return view('class_list', compact('classes'));
    }
     //show edit form
    public function edit($id) {   // Get all classes from the 'student_classes' table
        $class = StudentClass::find($id);  
        return view('edit_class', compact('class')); // Pass the classes to the 'class_list' view
    }
  // Update existing class
    public function update(Request $request, $id) {
        $class = StudentClass::find($id);
        $class->name = $request->class_name;
        $class->save();
        return redirect()->route('class.index');
    }

     // Delete a class
    public function destroy($id) {
        StudentClass::destroy($id);
        return redirect()->route('class.index');
    }
}
