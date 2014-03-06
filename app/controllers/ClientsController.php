<?php

class ClientsController extends BaseController {

	public function index()
	{
		return View::make('Dashboard.Clients.clients');
	}
	public function register_client(){
		$client=Client::create(array(
				'firstname'=>Input::get('firstname'),
				'lastname'=>Input::get('lastname'),
				'email'=>Input::get('email'),
				));
		$user=User::create(array(
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password')),
				'account_type'=>'Client',
				'profile_id'=>$client->id
				));
		return Redirect::back();
	}
	

}