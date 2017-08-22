<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Getdukaan\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;



class User extends \Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait, EventGenerator;
	
	protected $fillable = ['username', 'name' , 'email' ,'password', 'role_id'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $softDelete = true;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($password)
	{
         $this->attributes['password'] = Hash::make($password);

	}

	
	public function images()
	{
		return $this->hasMany('Image')->latest();
	}

	public function comments()
	{
		return $this->hasMany('Comment')->latest();
	}

	public function imagecomments()
	{
		return $this->hasMany('CommentImage')->latest();
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function favorites()
	{
		return $this->belongsToMany('Profile' , 'favorites')->withTimestamps();
	}

	public function likes()
	{
		return $this->belongsToMany('Profile' , 'likes')->withTimestamps();
	}


	public static function register($username, $name, $email, $password , $role_id)
	{
         $user = new static(compact('username', 'name', 'email', 'password' , 'role_id'));

         $user->raise(new UserRegistered($user));

         return $user;
	}

	public function is($user)
	{
		if (is_null($user)) return false;
		return $this->username == $user->username;
	}

	public function isCurrent()
	{
		if (Auth::guest()) return false;
		
		return Auth::user()->id  == $this->id;
	}


    
	public function gravatarLink($size=30)
	{
		$email = md5($this->email);
		return "//www.gravatar.com/avatar/{$email}?s={$size}";
	}

	public function owns($resource, $id = null)
    {
        
        
        return $this->id == $resource->user_id;
    }
}

