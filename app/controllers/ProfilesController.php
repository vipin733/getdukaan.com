<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Getdukaan\Forms\ProfileForm;
use Laracasts\Commander\Events\EventGenerator;


class ProfilesController extends \BaseController {

	
     private $profileForm;
    

     function __construct(ProfileForm $profileForm )
     {

     	$this->profileForm        = $profileForm;

     	$this->beforeFilter('currentUser', ['only' =>['edit','update'] ]);

     	$this->beforeFilter('csrf', ['only' =>['update'] ]);

     	$this->beforeFilter('shopowner', ['only' =>['edit','update'] ]);
     	

     	
     }

	/**
	 * Display the specified resource.
	 * GET /profiles/{username}
	 *
	 * @param  int  $username
	 * @return Response
	 */
	public function show($username)
	{


		try
		{
			
	    	$user = User::with('profile','likes','favorites','profile.category','profile.subcategory','images','profile.comments')->whereUsername($username)->firstOrFail();

	    	//$user->profile->views += 1;
			Event::fire('profileview', $user);
		}

		catch(ModelNotFoundException $e)
		{
           return Redirect::home()->with(['global'=>'User not found.', 'type' => 'danger']);
		}
		


        //Profile::incrementViews($profileID)->with('profileID', $profileID); ,$profileID

		return View::make('profile.show')->withUser($user)->with('title', $user->profile->storename);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /profiles/{usernmae}/edit
	 *
	 * @param  int  $usernmae
	 * @return Response
	 */
	public function edit($username)
	{
		

		$user = User::whereUsername($username)->firstOrFail();

        $categories = Category::lists('name' ,'id');

        $subcategories = Subcategory::lists('name','id');

        $blocks     = Block::all();

		return View::make('profile.edit', compact('categories' , 'subcategories' , 'blocks'))->withUser($user)->with('title' , 'Edit profile');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profiles/{usernmae}
	 *
	 * @param  int  $usernmae
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
        
        $input = Input::get();

		$this->profileForm->validate($input);



        if (count($user->profile))

        {
        	 $user->profile->update($input);
        }

        else
		{
		    $profile = Profile::create($input);

		    $user->profile()->save($profile);
		}
     
            
        return Redirect::back()->with(['global' => 'Your profile has been updated successfully move ', 'type' => 'success']);
       

	}
      
       
}