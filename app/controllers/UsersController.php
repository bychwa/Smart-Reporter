<?php

class UsersController extends BaseController {

	public function index()
	{
		return View::make('Dashboard.Users.users');
	}
	

}