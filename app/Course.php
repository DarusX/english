<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Course extends Model
{
    protected $fillable = ['course', 'level_id', 'course_type_id', 'course_option_id', 'start_time', 'finish_time','start_date', 'finish_date', 'classroom_id', 'professor_id', 'branch_id', 'price'];
    public function level()
    {
    return $this->belongsTo(Level::class);
    }
    public function course_type()
    {
    return $this->belongsTo(CourseType::class);
    }
    public function course_option()
    {
    return $this->belongsTo(CourseOption::class);
    }
    public function classroom()
    {
    return $this->belongsTo(Classroom::class);
    }
    public function professor()
    {
    return $this->belongsTo(Professor::class);
    }
    public function branch()
    {
    return $this->belongsTo(Branch::class);
    }
    public function lists()
    {
    return $this->hasMany(CourseStudent::class);
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
