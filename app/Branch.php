<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name', 'address', 'phone'
    ];
    public function course()
    {
        return $this->hasMany('App\Course', 'branch_id', 'id');
    }
}
