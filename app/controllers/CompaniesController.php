<?php

class CompaniesController extends BaseController {

	public function index()
	{
		return View::make('Dashboard.Users.users');
	}
	public function register_company(){
		$company=Company::create(array(
				'name'=>Input::get('name'),
				'location'=>Input::get('location'),
				'company_type'=>Input::get('company_type'),
				));
		$user=User::create(array(
				'username'=>Input::get('username'),
				'password'=>Hash::make(Input::get('password')),
				'account_type'=>'Company',
				'profile_id'=>$company->id
				));
		return Redirect::back();
	}
}