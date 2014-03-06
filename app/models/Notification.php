<?php

class Notification extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Notifications';
	protected $fillable=array('subject','message','client_id','company_id','geo_location','seen');

	public function user(){
		return $this->belongsTo('User','id','client_id');
	}
}