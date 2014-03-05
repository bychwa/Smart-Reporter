<?php

class ClientsController extends BaseController {

	public function index()
	{
		return View::make('Dashboard.Clients.clients');
	}
	

}