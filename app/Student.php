<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'birthdate',
        'gender',
        'curp',
        'mobile',
        'phone',
        'emergency_phone',
        'allergy',
        'address',
        'email',
        'comment',
        'blood_type',
        'registration_date',
        'branch_id',
        'status_id',
        'matricula',
        'photo'
    ];
    public function branch()
    {
    return $this->belongsTo(Branch::class);
    }
    public function status()
    {
    return $this->belongsTo(Status::class);
    }
    public function setStatusAttribute()
    {
        if ($this->status==1) {
            return 'Preinscrito';
        } else {
            return 'Inscrito';
        }
        
    }
    public function lists()
    {
    return $this->hasMany(CourseStudent::class);
    }
    public function getStudentNameAttribute()
    {
        return $this->name.' '.$this->lastname;
    }
}
