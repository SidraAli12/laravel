<?php

namespace App\Http\Controllers;
use App\Models\task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function showTaskForm()
    {
        return view('task.taskform');
    }
    public function saveTask(Request $request)
{
    print_r($request-> task);
    $task = new task;
        $task->task = $request->task;

        $task->save();

        return 'data saved';
    }
}




