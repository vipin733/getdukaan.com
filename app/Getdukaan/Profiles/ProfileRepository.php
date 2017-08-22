<?php namespace Getdukaan\Profiles;

use User;
use Profile;

class ProfileRepository 
{

	public function save(Profile $profile, $userId)
	{
		return User::findOrFail($userId)
		->profiles()
		->save($profile);

	}

}