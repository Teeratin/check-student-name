<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject_Student extends Model
{
    use HasFactory;
    protected $table = 'subject_student';

    public $timestamps = false;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'subject_id');
    }

}
