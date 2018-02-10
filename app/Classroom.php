<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['number'];
    public function courses()
    {
        return $this->hasMany('App\Course', 'classroom_id', 'id');
    }
}
