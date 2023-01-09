<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpOffice\PhpSpreadsheet\Reader\Xml\Style\NumberFormat;

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
    public function timetable()
    {
        return $this->hasMany(Timetable::class, 'student_id');
    }

    public function CountPresent($id)
    {
        return $this->timetable()->where('subject_id', $id)->where('tt_type', 'present')->count();
    }
    public function CountLate($id)
    {
        return $this->timetable()->where('subject_id', $id)->where('tt_type', 'late')->count();
    }
    public function CountAbsent($id)
    {
        return $this->timetable()->where('subject_id', $id)->where('tt_type', 'absent')->count();
    }
    public function CountLeave($id)
    {
        return $this->timetable()->where('subject_id', $id)->where('tt_type', 'leave')->count();
    }
    public function isCheck($id)
    {
        return $this->timetable()->where('subject_id', $id)->whereDate('date', date('Y-m-d'))->count();
    }
    public function SumScore($id)
    {
        $subject = Subject::find($id);
        $present = $subject->scoring->scoring_present * $this->CountPresent($id);
        $late = $subject->scoring->scoring_late * $this->CountLate($id);
        $absent = $subject->scoring->scoring_absent * $this->CountAbsent($id);
        $sum = $present + $late + $absent;
        $calculate = $sum /10;
        $result = $sum / $calculate;
        dd($result);

        return number_format($sum);
    }
}
