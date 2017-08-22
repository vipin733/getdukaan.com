<?php

class Subcategory extends \Eloquent {

	protected $fillable = ['category_id', 'name'];

	public $timestamps = true;

	

	public function profile()
	
	   {
	   	 return $this->hasMany('Profile');
	   }
}