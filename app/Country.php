<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\People;

class Country extends Model
{
    

    public function posts(){
    	return $this->hasManyThrough(Post::class,People::class);
    }

    public function peoples(){
    	return $this->hasMany(People::class);
    }
}
