<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $table = 'classroom';
    protected $fillable = ['number'];
    public function course()
    {
        return $this->hasMany('App\Course', 'classroom_id', 'id');
    }
}
