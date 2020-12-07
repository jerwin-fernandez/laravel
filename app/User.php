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

    // make it plural posts
    public function posts() {
        return $this->hasMany('App\Post');
    }

    // this is the convention
    // the keyword is get
    // then what column name
    // then the attribute keyword
    // first letter must be lowercase then after that uppercase for each word.
    public function getNameAttribute($value) {
        // this is where u modified the value to be output
        return strtoupper($value);
    }

    // use the set keyword
    public function setNameAttribute($value) {
        // access your attributes using the property $attributes then what column u want to edit
        // here example everytime we save data it must be uppercase
        $this->attributes['name'] = strtoupper($value);
    }

}
