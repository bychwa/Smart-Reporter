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

Route::get('/admin' , array('uses'=>'AdminController@index'));
 

Route::get('/dashboard', array('uses'=>'DashboardController@index'));
Route::get('/monitoring', array('uses'=>'DashboardController@index'));
Route::get('/clients', array('uses'=>'ClientsController@index'));
Route::post('/clients/register', array('uses'=>'ClientsController@register_client'));


Route::get('/management', array('uses'=>'DashboardController@index'));
Route::get('/users', array('uses'=>'CompaniesController@index'));
Route::post('/users/register', array('uses'=>'CompaniesController@register_company'));


Route::get('/notifications/get', function(){
	do{
		sleep(0);
	}while(is_null(Notification::where('seen',0)->first()));
	
	$noty=Notification::where('seen',0)->first();
	$change=Notification::find($noty->id);
	$change->seen=1;
	$change->save();
	return $noty->subject." - ".$noty->message;
});
Route::get('/notification/get', function(){
	if(is_null(Input::get('id'))) return "CSRF Attack Detected!";
	$noty=Notification::find(Input::get('id'));
	$data="
		<table class='table table-hovered table-bordered'>
			<tr>
				<td>
					Subject
				</td>
				<td>
				 	".$noty->subject."
				</td>
			</tr>
			<tr>
				<td>
					Reported By:
				</td>
				<td>
				 	".User::find($noty->client_id)->client->firstname." ".User::find($noty->client_id)->client->lastname."
				</td>
			</tr>
			<tr>
				<td>
					Location
				</td>
				<td>
				 	".$noty->geo_location."
				</td>
			</tr>
			<tr>
				<td>
					Message
				</td>
				<td>
					".$noty->message."
				</td>
			<tr/>
			
		</table>
	";
	return $data;
});
Route::get('/notifications/new', function(){

	return Notification::create(array('subject'=>'ATTENTION TENA','message'=>'I need help','client_id'=>3,'company_id'=>5,'geo_location'=>'5.3232,45.345432'));
});
Route::post('/API/v1/notifications/new', function(){

	return Notification::create(array('subject'=>Input::get('subject'),'message'=>Input::get('message'),'client_id'=>Input::get('client_id'),'company_id'=>Input::get('company_id'),'geo_location'=>Input::get('geo_location')));
});
Route::get('/clients/new', function(){

	return Client::create(array('firstname'=>'Jackson','lastname'=>'Isack','client_id'=>1,'company_id'=>2));
});
