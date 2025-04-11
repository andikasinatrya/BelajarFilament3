<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = [
        'nis',
        'name',
        'gender',
        'birthday',
        'religion',
        'contact',
        'profile'
    ];
}
