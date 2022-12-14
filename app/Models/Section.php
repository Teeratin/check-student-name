<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $table = 'section';

    protected $primaryKey = 'section_id';

    public $timestamps = false;

    protected $guarded = [];


    public function students(){
        return $this->hasMany(Student::class,'section_id');
    }
}
