<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseClassification extends Model
{
    protected $table = 'course_classification';
    protected $fillable = ['name'];

    public function option()
    {
        return $this->hasMany('App\CourseOption', 'classification_id', 'id');
    }
}
