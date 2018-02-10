<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status'
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
