<?php

class ActiveController extends \BaseController {

	

    function __construct()

     {

	   $this->beforeFilter('currentUserStatus', ['only' =>['edit','update'] ]);

	   $this->beforeFilter('csrf', ['only' =>['update'] ]);

	   $this->beforeFilter('shopowner', ['only' =>['edit','update'] ]);

	 }  

	/**
	 * Show the form for editing the specified resource.
	 * GET /active/{username}/edit
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		return View::make('profile.partials.status')->withUser($user)->with('title', 'Status update');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /active/{username}
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		$input = Input::get();

		if (count($user->profile))

        {  

             $user->profile->fill($input)->save();
		}

		else
		{
		    $profile = Profile::create($input);

		    $user->profile()->save($profile);
		}

        return Redirect::back()->with(['global' => 'Your status has been updated successfully.', 'type' => 'success']);
	
	}

	

}