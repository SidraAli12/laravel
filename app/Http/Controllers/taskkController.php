<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taskk; 
use Illuminate\Support\Facades\Auth; 

class taskkController extends Controller
{
    public function index() {
        $tasks = Taskk::where('user_id', Auth::id())->get();
        return view('taskk.index', compact('tasks'));
    }

    public function create() {
        return view('taskk.create');
    }

    public function store(Request $request) {
        $task = new Taskk;
        $task->user_id = Auth::id();
        $task->title = $request->title;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();

        return redirect()->route('taskk.index');
    }

    public function edit($id) {
        $task = Taskk::findOrFail($id);
        return view('taskk.edit', compact('task'));
    }

    public function update(Request $request, $id) {
        $task = Taskk::findOrFail($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->is_completed = $request->has('is_completed');
        $task->save();

        return redirect()->route('taskk.index');
    }

    public function destroy($id) {
        $task = Taskk::findOrFail($id);
        $task->delete();
        return redirect()->route('taskk.index');
    }
}