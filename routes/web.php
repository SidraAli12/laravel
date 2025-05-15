<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\userController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\loginController;


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


// Route::get('/user/{name}', [UserController::class, 'greet']);

// //task 

// Route::get('/show-task-form', [TaskController::class, 'showTaskForm']);

// Route::post('/save-task', [TaskController::class, 'saveTask']);



Route::get('/student-form/{classid}', [StudentController::class, 'showForm'])->name('student.add');;
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



//another task
Route::get('students', [StudentController::class, 'index'])->name('students.index'); // List all students
// Route to show the form to create a new student
Route::get('/student/create', [StudentController::class, 'showForm'])->name('student.create');
// Route to save a new student
Route::post('/student/save', [StudentController::class, 'saveStudent'])->name('student.save');
// Route to show the edit form for a student
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
// Route to update student details
Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
// Route to delete a student
Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.delete');


function p($data)
{
    echo "<pre>";
    print_r($data);
    die();
}





//login /signup

Route::get('/user/add', [loginController::class, 'showUserLogin']);
// function p($data)
// {
//     echo "<pre>";
//     print_r($data);
//     die();
// }
Route::post('/user/save', [loginController::class, 'store']) ;
// Route::get('/user/login', [loginController::class, 'login']);
// Route::get('/user/login', function () {
//     return view('login');
// });

Route::get('/user/login', [loginController::class, 'showlogin']);
Route::post('/user/auth', [loginController::class, 'login']);

Route::get('/user/account', [loginController::class, 'account'])->name('account');
