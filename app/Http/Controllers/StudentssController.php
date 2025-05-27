<?php

namespace App\Http\Controllers;
use App\Models\Studentss;
use Illuminate\Http\Request;

class StudentssController extends Controller
{
    // Save (insert)
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'course']); // only()

        $student = new Studentss();
        $student->name = $data['name'];
        $student->email = $data['email'];
        $student->course = $data['course'];
        $student->save(); // save()

        return redirect()->back()->with('success', 'Student saved!');
    }

    // Update
    public function update(Request $request, $id)
    {
        $student = Studentss::find($id);

        $student->update([
            'name' => $request->name,
            'course' => $request->course,
        ]); // update()

        return redirect()->back()->with('success', 'Student updated!');
    }

    // Show with where + get
    public function index()
    {
        $students = Studentss::where('course', 'Laravel')->get(); // where + get
        return view('studentss.index', compact('students'));
    }
}
