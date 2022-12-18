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
        return $this->student_perfix . $this->student_fname . ' ' . $this->student_lname;
    }

    public function section(){
        return $this->belongsTo(Section::class,'section_id');
    }
}
