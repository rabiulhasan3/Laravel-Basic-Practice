<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;

class hasManyThroughController extends Controller
{
    public function hasManyThrough(){
    	$country = Country::find(1);
    	return $country->posts;
    }
}
