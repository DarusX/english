<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    protected $fillable=['course_id','student_id','oral_exam','written_exam','homework','attendance','comment'];
    public function course()
    {
    return $this->belongsTo(Course::class);
    }
    public function student()
    {
    return $this->belongsTo(Student::class);
    } 
    public function getTotalScoreAttribute()
    {
    $total=($this->oral_exam+$this->written_exam+$this->homework+$this->attendance);
    return $total;
    }
}
