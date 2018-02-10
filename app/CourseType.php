<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $fillable = ['name', 'duration', 'information'];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
