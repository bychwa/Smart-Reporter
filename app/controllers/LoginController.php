<?php

class LoginController extends BaseController {

	public function index()
	{
		return View::make('Login.login');
	}
	public function do_login(){
		//echo Input::get('username')." ".Input::get('password');
		return View::make('Dashboard.Monitoring.dashboard');
	}

}