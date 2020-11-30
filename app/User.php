<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // name of the model
    public function post() {
        // this will automatically find the user_id foreign key from post table by default
        return $this->hasOne('App\Post');
    }

    // make it plural posts
    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function photos() {
        return $this->morphMany('App\Photo', 'imageable');
    }
}
