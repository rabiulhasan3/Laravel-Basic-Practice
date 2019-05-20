<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Passport;
use App\User;

class oneToOneController extends Controller
{
    public function hasOne(){
    	$user = User::find(1);
    	dd($user->passport->passport_number);
    }

    public function belongsTo(){
    	$passport = Passport::find(1);
    	dd($passport->user->name);
    }
}
