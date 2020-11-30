<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{ 
    
    public function posts() {
        // the first argument is post table because this model will depends on that
        // the second argument is the intermediate table where this table going to get the country_id
        // the third parameter is the declared foriegn key to the User table and that is country_id,
        // apply third parameter if you have different name on the Users table
        return $this->hasManyThrough('App\Post', 'App\User');
    }

}
