<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOption extends Model
{
    protected $table = 'course_option';
    protected $fillable = ['name', 'classification_id'];

    public function classification()
    {
        return $this->belongsTo('App\CourseClassification', 'classification_id', 'id');    
    }
    public function course()
    {
        return $this->hasMany('App\Course', 'course_option_id', 'id');
    }
}
