<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'username', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }
    public function authorizeRoles($role)
    {
        return $this->hasRole($role) || abort(401, 'This action is unauthorized.');
    }
}
