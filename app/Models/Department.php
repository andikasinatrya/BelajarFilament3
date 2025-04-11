<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public $fillable = [
        'name_department',
        'slug',
        'description'
    ];

    public $table = 'departments';
}
