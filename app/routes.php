<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses'=>'LoginController@index'));
Route::post('/', array('uses'=>'LoginController@do_login'));

Route::get('/dashboard', array('uses'=>'DashboardController@index'));
Route::get('/monitoring', array('uses'=>'DashboardController@index'));
Route::get('/clients', array('uses'=>'ClientsController@index'));
Route::get('/management', array('uses'=>'DashboardController@index'));
Route::get('/users', array('uses'=>'UsersController@index'));

Route::get('/notifications/get', function(){
	do{
		sleep(0);
	}while(is_null(Notification::where('seen',0)->first()));
	
	$noty=Notification::where('seen',0)->first();
	
	$change=Notification::find($noty->id);
	$change->seen=1;
	$change->save();
	return array('id'=>$noty->id);
});
Route::get('/notifications/new', function(){

	return Notification::create(array('header'=>'ATTENTION','message'=>'I need help','client_id'=>1));
});
