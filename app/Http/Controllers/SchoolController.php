<?php

namespace App\Http\Controllers;
use App\Models\School; 
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function create()
    {
        return view('school.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'school' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        School::create([
            'school' => $request->school,
            'address' => $request->address,
        ]);

        return redirect()->back()->with('success', 'School added successfully.');
    }
    public function index()
{
    $schools = \App\Models\School::all(); // fetch all school records
    return view('school.index', compact('schools'));
}


//delete
public function destroy($id)
{
    $school = \App\Models\School::findOrFail($id);
    $school->delete();

    return redirect()->route('school.index')->with('success', 'School deleted successfully.');
}

//update 

public function edit($id)
{
    $school = \App\Models\School::findOrFail($id);
    return view('school.edit', compact('school'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'school' => 'required|string|max:255',
        'address' => 'required|string',
    ]);

    $school = \App\Models\School::findOrFail($id);
    $school->update([
        'school' => $request->school,
        'address' => $request->address,
    ]);

    return redirect()->route('school.index')->with('success', 'School updated successfully.');
}

}
