<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Lecturer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'lecturer';

    protected $primaryKey = 'lecturer_id';

    public $timestamps = false;

    protected $fillable = [
        'lecturer_perfix',
        'lecturer_fname',
        'lecturer_lname',
        'lecturer_type',
        'lecturer_username',
        'lecturer_password',
        'lecturer_image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'lecturer_password',
    ];

    public function getFullnameAttribute()
    {
        return $this->lecturer_perfix . $this->lecturer_fname . ' ' . $this->lecturer_lname;
    }

    public function getPasswordAttribute()
    {
        return $this->lecturer_password;
    }

    public function setLecturerPasswordAttribute($value)
    {
        $this->attributes['lecturer_password'] = bcrypt($value);
    }
}
