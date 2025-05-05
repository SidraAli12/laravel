<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
//public $table= 'students';
protected $fillable = ['name', 'email', 'password'];


}
