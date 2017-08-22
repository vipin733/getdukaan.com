<?php


class Image extends \Eloquent {

   
    

	protected $fillable = ['user_id' , 'file' , 'title', 'description', 'availabel'];

	protected $table = 'images';

	protected $softDelete = true;

	public function user()
	{
        return $this->belongsTo('User');
	}

	public function imagecomments()
	{
		return $this->hasMany('CommentImage')->latest();
	}




}