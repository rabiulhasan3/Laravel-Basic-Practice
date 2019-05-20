<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'audio' => 'App\Audio',
    'video' => 'App\Video',
]);

class Comment extends Model
{
    public function commetable(){
    	return $this->morphTo();
    }
}
