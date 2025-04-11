<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentHasClass extends Model
{
    protected $guarded = [];

    public function students(){
        return $this->belongsTo(Student::class);
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class, 'classrooms_id', 'id');
    }

    public function periode(){
        return $this->belongsTo(Periode::class);
    }
}
