<?php namespace Getdukaan\Users;

use User;

class UserRepository 
{
	public function save(User $user)
	{
		return $user->save();
	}


	public function gotPaginated()
	{
		return User::orderBy('username')->latest()->paginate(25);
	}

	

	public function findById($id)
	{
		return User::findOrFail($id);
	}


	public function findByUsernameProfile($username)
	{
		return User::with('images')->whereUsername($username)->first();
	}
}