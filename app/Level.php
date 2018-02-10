<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'level', 'description'
    ];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
