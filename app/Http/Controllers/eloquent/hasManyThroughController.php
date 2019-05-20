<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class hasManyThroughController extends Controller
{
    public function hasManyThrough(){
    	$country = Country::find(1);
    	$peoples = $country->peoples;
    	foreach($peoples as $people){
    		echo $people->posts;
    	}
    }
}
