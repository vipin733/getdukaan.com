<?php  namespace Getdukaan\Registration\Events;

use User;

class UserRegistered
{
	public $user;

	function __construct(User $user)
	{
		$this->user = $user;
	}
}