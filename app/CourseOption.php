<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseOption extends Model
{
    protected $table = 'course_option';
    protected $fillable = ['name', 'classification_id'];

    public function classification()
    {
        return $this->belongsTo('App\Classification', 'classification_id', 'id');    
    }
}
