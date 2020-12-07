<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'content'
    ];

    // name of the model
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function scopeLatestDesc($query) {
        return $query->orderBy('id', 'desc')->get();
    }

}
