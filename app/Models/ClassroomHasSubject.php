<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassroomHasSubject extends Model
{
    protected $guarded = [];

    protected $table = 'classroom_has_subjects';

    public function subjects(){
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
    public function class(){
        return $this->belongsTo(Classroom::class);
    }
}
