<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Audio extends Model
{
    public function comments(){
    	return $this->morphMany(Comment::class,'commentable');
    }
}
