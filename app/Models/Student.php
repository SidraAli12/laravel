<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';
    protected $fillable = ['name', 'email', 'password', 'class_id'];
    // Define the relationship to the ClassName model
    public function class()
    {
        return $this->belongsTo(StudentClass::class, 'class_id');
    }
    


}
