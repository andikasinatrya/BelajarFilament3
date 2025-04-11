<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model 
{
    public $fillable = [
        'nip',
        'name',
        'address',
        'profile'
    ];

    public function classroom(){
        return $this->hasMany(HomeRoom::class, 'teachers_id', 'id');
    }
}
