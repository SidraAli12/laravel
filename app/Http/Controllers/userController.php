<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function greet($name)
    {
        return "Hello from controller, $name!";
    }
}
