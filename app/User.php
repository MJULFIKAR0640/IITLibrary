<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function issues(){
        return $this->hasMany(Issue::class);
    }

    public function remarks()
    {
        return $this->hasMany(Remarks::class);
    }

    public function requestedbooks(){
        return $this->hasMany(Requestedbook::class);
    }

    protected $fillable = [
        'name', 'email', 'type', 'phone', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

   

}

