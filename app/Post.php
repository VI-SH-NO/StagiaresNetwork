<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * Get the posts for the user.
     * @method 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }   

}
