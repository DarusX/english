<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOption extends Model
{
    protected $fillable = ['name', 'classification_id'];

    public function classification()
    {
        return $this->belongsTo(CourseClassification::class);    
    }
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
