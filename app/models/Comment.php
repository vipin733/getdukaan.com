<?php

class Comment extends \Eloquent {


	protected $fillable = ['user_id', 'profile_id' , 'body'];

	protected $table = 'comments';


	public function profile()
	{
		return $this->belongsTo('Profile', 'profile_id');
	}

	public function owner()
	{
		return $this->belongsTo('User', 'user_id');
	}

}