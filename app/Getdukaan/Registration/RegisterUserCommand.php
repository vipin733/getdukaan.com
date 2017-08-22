<?php namespace Getdukaan\Registration;

class RegisterUserCommand
{
	public $username;

	public $name;

	public $email;

	public $password;

	public $role_id;

	function __construct($username, $name ,$email, $password, $role_id)
	{
		
		$this->username = $username;
		$this->name     = $name;
		$this->email    = $email;
		$this->password = $password;
		$this->role_id  = $role_id;

	}
}
