<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
}
