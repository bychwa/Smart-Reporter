<?php

class LoginController extends BaseController {

	public function index()
	{
		return View::make('Login.login');
	}
	
	public function do_login(){
		
		$credentials=array('username'=>Input::get('username'),
							'password'=>Input::get('password'));

		if(Auth::attempt($credentials)){
		$results = Auth::user()->account_type;
		$l = trim($results);
		if($l == 'administrator'){
			return 'hello world';
			 Redirect::route('/admin')
			->with('flash_notes' , 'Logged in Successvely!!');
		}
		elseif ($l == 'end_user') {
			return Redirect::route('/monitoring')
			->with('flash_notes' , 'Logged in Successvely!!');
		}

	return Redirect::route('/clients')
	->with('flash_notes' , 'Wrong, Password or Username!!')
	->withInputs();

	}

}


}