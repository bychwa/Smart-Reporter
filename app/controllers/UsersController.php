<?php

class UsersController extends BaseController {

	public function index()
	{
		return View::make('Admin.Users.users');
	}
	

}