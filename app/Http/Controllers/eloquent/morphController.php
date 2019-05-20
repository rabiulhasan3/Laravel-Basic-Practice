<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Audio;

class morphController extends Controller
{
    public function morph(){
    	$audio = Audio::find(1);
    	echo $audio->name;
    	echo '<hr>';
    	foreach($audio->comments as $comment){
    		echo $comment->body.'<br>';
    	}
    }
}
