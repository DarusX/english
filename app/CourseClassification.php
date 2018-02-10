<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseClassification extends Model
{
    protected $fillable = ['name'];

    public function options()
    {
        return $this->hasMany(CourseOption::class);
    }
}
