<?php

namespace App\Models;

use App\Models\Classroom;
use App\Models\CategoryNilai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    protected $guarded = [];

    public function class(): BelongsTo{
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }

    public function student(): BelongsTo{
        return $this->belongsTo(Student::class);
    }

    public function periode(): BelongsTo{
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }

    public function subject(): BelongsTo{
        return $this->belongsTo(Subject::class);
    }

    public function category_nilai(): BelongsTo{
        return $this->belongsTo(CategoryNilai::class, 'category_nilai_id', 'id');
    }
}
