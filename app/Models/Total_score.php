<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Total_score extends Model
{
    use HasFactory;

    protected $table = 'total_score';

    protected $primaryKey = 'ts_id';

    public $timestamps = false;

    protected $guarded = [];

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
