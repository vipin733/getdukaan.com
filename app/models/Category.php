<?php

class Category extends \Eloquent {

	protected $fillable = ['name'];


    public $timestamps = true;

    public function subcategories()

      {
          return $this->hasMany('Subcategory', 'category_id');
      }

	public function profile()
	
	   {
	   	 return $this->hasMany('Profile');
	   }
}