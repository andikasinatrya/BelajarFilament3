<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $fillable = [
        'kode',
        'name',
        'slug'
    ];

    public function classrooms(){
        return $this->belongsToMany(Classroom::class, 'classroom_has_subjects', 'subject_id', 'classroom_id');
    }
}
