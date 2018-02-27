<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'gender',
        'career',
        'cedula',
        'curp',
        'rfc',
        'mobile',
        'phone',
        'blood_type',
        'address',
        'email',
        'matricula',
        'hired',
        'fired',
        'photo'
    ];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function getTeacherAttribute()
    {
        return $this->name.' '.$this->lastname;
    }
}
