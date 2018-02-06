<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseType extends Model
{
    protected $table = 'course_type';
    protected $fillable = ['name', 'duration', 'information'];
}
