<?php

class Notification extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'SM_Notifications';
	protected $fillable=array('header','message','client_id','seen');

}