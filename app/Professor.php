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
        'hired',
        'fired',
        'photo'
    ];
}
