<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public $fillable = [
        'name',
        'slug'
    ];

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'classroom_has_subjects', 'classroom_id', 'subject_id');
    }
}
