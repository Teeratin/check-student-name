<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scoring extends Model
{
    use HasFactory;

    protected $table = 'scoring';

    protected $primaryKey = 'scoring_id';

    public $timestamps = false;

    protected $guarded = [];
}
