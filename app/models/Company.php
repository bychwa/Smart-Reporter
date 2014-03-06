<?php

class Company extends Eloquent {

	protected $table = 'Companies';
	protected $fillable=array('name','location','company_type');
	public function user(){
		return $this->belongsTo('User','id','profile_id');
	}
}