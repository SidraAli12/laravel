<?php

namespace App\Http\Controllers;
use App\Models\Studentss;
use Illuminate\Http\Request;

class StudentssController extends Controller
{
    // Save (insert)
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'course']); //just use for a specific data

        $student = new Studentss();
        $student->name = $data['name'];
        $student->email = $data['email'];
        $student->course = $data['course'];
        $student->save();

        return redirect()->back()->with('success', 'Student saved!');
    }

    // Update
    public function update(Request $request, $id)
    {
        $student = Studentss::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
        ]);

        return redirect('/studentss')->with('success', 'Student updated!');
    }

    // Show with where + get
    public function index()
    {
        $students = Studentss::where('course', 'Laravel')->get();
        return view('studentss.index', compact('students'));
    }

    // Show edit form
    public function edit($id)
    {
        $student = Studentss::findOrFail($id);
        return view('studentss.edit', compact('student'));
    }
}
