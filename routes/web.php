<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'eloquent','namespace'=>'eloquent','as'=>'eloquent.'],function(){

	Route::get('has-one','oneToOneController@hasOne');
	Route::get('belongs-to','oneToOneController@belongsTo');


	Route::get('one-to-many','oneToManyController@oneToMany');

});
