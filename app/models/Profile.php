<?php


class Profile extends \Eloquent {

 

	protected $fillable = ['user_id','storename', 'status','category_id', 'subcategory_id' , 'timing', 'weekend', 'about', 'image', 'country', 'state', 'district', 'city', 'block_id' , 'zipcode', 'location','website'];

    protected $softDelete = true;

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function category()
	{
		return $this->belongsTo('Category','category_id');
	}

	public function subcategory()
	{
		return $this->belongsTo('Subcategory','subcategory_id');
	}

	public function block()
	{
		return $this->belongsTo('Block');
	}

	public function comments()
	{
		return $this->hasMany('Comment')->latest();
	}

	public function likes()
	{
		return $this->belongsToMany('User' ,'likes')->withTimestamps();
	}

	public function favorites()
	{
		return $this->belongsToMany('User' ,'favorites')->withTimestamps();
	}
}