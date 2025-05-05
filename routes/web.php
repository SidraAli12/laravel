<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hi', function () {
    //return view('welcome');
    return "welcome";
});
// route with parameters 
Route::get('/name/{name}', function ($name) {
    return "Welcome, $name!";
});
Route::get('/post/{id}/comment/{commentId}', function ($id, $commentId) {
    return "Post ID: $id - Comment ID: $commentId";
});


Route::get('/user/{name}', [UserController::class, 'greet']);

//task 

Route::get('/show-task-form', [TaskController::class, 'showTaskForm']);

Route::post('/save-task', [TaskController::class, 'saveTask']);



Route::get('/student-form', [StudentController::class, 'create']);
Route::post('/student-form', [StudentController::class, 'store'])->name('student.store');


Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
