<?php

namespace App\Http\Controllers\eloquent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class manyToManyController extends Controller
{
    // public function manyToMany(){
    // 	$user = User::find(3);
    // 	foreach($user->roles as $role){
    // 		echo $role->name;
    // 		echo '<br>';
    // 	}
    // }

     public function manyToMany(){
    	$role = Role::find(1);
    	foreach($role->users as $user){
    		echo $user->name;
    		echo '<br>';
    	}
    }
}
