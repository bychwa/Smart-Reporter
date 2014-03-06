<?php

class Client extends Eloquent {

	protected $table = 'Clients';
	protected $fillable=array('firstname','lastname','email');

	public function user(){
		return $this->belongsTo('User','id','profile_id');
	}
}