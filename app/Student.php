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
        'username',
        'photo'
    ];
    public function branch()
    {
    return $this->belongsTo('App\Branch', 'branch_id', 'id');
    }
    public function status()
    {
    return $this->belongsTo('App\Status', 'status_id', 'id');
    }

}
