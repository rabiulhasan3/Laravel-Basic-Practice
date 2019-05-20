<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class People extends Model
{
   public function posts(){
   	return $this->hasMany(Post::class);
   }
}
