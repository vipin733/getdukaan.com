<?php

class Block extends \Eloquent {

	protected $fillable = ['name'];

	public $timestamps = true;

	public function profile()
	
	   {
	   	 return $this->hasMany('Profile');
	   }
}