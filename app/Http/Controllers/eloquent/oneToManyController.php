<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class oneToManyController extends Controller
{
    public function oneToMany(){
    	$user = User::find(3);
    	foreach($user->mobiles as $mobile){
    		echo $mobile->number;
    		echo '<br>';
    	}
    }
}
