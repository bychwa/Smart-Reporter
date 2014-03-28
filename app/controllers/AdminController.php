<?php

class AdminController extends BaseController {

	public function index()
	{
	return View::make('Admin.Monitoring.dashboard');
	
	}
	

}