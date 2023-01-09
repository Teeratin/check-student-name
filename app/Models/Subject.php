<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subject';

    protected $primaryKey = 'subject_id';

    public $timestamps = false;

    protected $guarded = [];

    public function course(){
       return $this->belongsTo(Course::class,'course_id');
    }
    public function students(){
        return $this->belongsToMany(Student::class,'subject_student' ,'subject_id' , 'student_id');
    }
    public function timetable(){
        return $this->belongsToMany(Timetable::class,'subject_id');
    }
    public function scoring(){
        return $this->belongsTo(Scoring::class,'scoring_id');
    }

}
