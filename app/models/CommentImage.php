<?php

class CommentImage extends \Eloquent {


	protected $fillable = ['user_id', 'image_id' , 'body'];

	protected $table = 'comments_images';


	public function image()
	{
		return $this->belongsTo('Image', 'image_id');
	}

	public function imageowner()
	{
		return $this->belongsTo('User', 'user_id');
	}

}