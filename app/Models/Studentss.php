<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Studentss extends Model
{
    protected $table = 'studentss';

   protected $fillable = ['name', 'email', 'course'];
}
