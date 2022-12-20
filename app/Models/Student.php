<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student';

    protected $primaryKey = 'student_id';

    public $timestamps = false;

    protected $guarded = [];

    public function getFullnameAttribute()

    {
        return $this->student_prefix . $this->student_fname . ' ' . $this->student_lname;
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
    public function subject()
    {
        return $this->belongsToMany(Student::class, 'subject_student', 'subject_id', 'student_id');
    }
    public function scoring()
    {
        return $this->belongsTo(Student::class, 'subject_student', 'subject_id', 'student_id');
    }
    public function timetable()
    {
        return $this->hasmany(Timetable::class, 'student_id');
    }
}
