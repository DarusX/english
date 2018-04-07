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
    public function payments()
    {
    return $this->hasMany(Payment::class);
    }
    public function setStatusAttribute()
    {
        if ($this->status==1) {
            return 'Preinscrito';
        } else {
            return 'Inscrito';
        }
        
    }
    public function scopePreinscrito($query)
    {
        return $query->where('status_id','=',1)->get();
    }
    public function scopeInscrito($query)
    {
        return $query->where('status_id','=',2)->get();
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
