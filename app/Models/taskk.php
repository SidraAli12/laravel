<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class taskk extends Model
{
     protected $table = 'taskks'; // ← add this line if you want to keep model name `taskk`
   
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id', 'is_completed'];

}
