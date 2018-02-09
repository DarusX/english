<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'level', 'description'
    ];
    public function course()
    {
        return $this->hasMany('App\Course', 'level_id', 'id');
    }
}
