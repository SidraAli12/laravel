<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassController;



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



Route::get('/school/create', [SchoolController::class, 'create'])->name('school.create');
Route::post('/school/store', [SchoolController::class, 'store'])->name('school.store');
Route::get('/school', [SchoolController::class, 'index'])->name('school.index');
Route::delete('/school/{id}', [SchoolController::class, 'destroy'])->name('school.destroy');
Route::get('/school/{id}/edit', [SchoolController::class, 'edit'])->name('school.edit');
Route::put('/school/{id}', [SchoolController::class, 'update'])->name('school.update');


//new task 
Route::get('/class/create', [ClassController::class, 'create'])->name('class.create');
Route::post('/class/store', [ClassController::class, 'store'])->name('class.store');
Route::get('/class/list', [ClassController::class, 'index'])->name('class.index');
Route::get('/class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
Route::post('/class/update/{id}', [ClassController::class, 'update'])->name('class.update');
Route::get('/class/delete/{id}', [ClassController::class, 'destroy'])->name('class.delete');
