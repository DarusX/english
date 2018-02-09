<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = ['course', 'level_id', 'course_type_id', 'course_option_id', 'start_time', 'finish_time','start_date', 'finish_date', 'classroom_id', 'professor_id', 'branch_id', 'price'];
    public function level()
    {
    return $this->belongsTo('App\Level', 'level_id', 'id');
    }
    public function course_type()
    {
    return $this->belongsTo('App\CourseType', 'course_type_id', 'id');
    }
    public function course_option()
    {
    return $this->belongsTo('App\CourseOption', 'course_option_id', 'id');
    }
    public function classroom()
    {
    return $this->belongsTo('App\Classroom', 'classroom_id', 'id');
    }
    public function professor()
    {
    return $this->belongsTo('App\Professor', 'professor_id', 'id');
    }
    public function branch()
    {
    return $this->belongsTo('App\Branch', 'branch_id', 'id');
    }
    public function getDateAttribute()
    {
        return $this->start_date.' to '.$this->finish_date;
    }
    public function getScheduleAttribute()
    {
        return $this->start_time. ' a '.$this->finish_time;
    }
}
