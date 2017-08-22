<?php

use Getdukaan\Forms\ProfilesForm;
use GrahamCampbell\Flysystem\Facades\Flysystem;

class FrontController extends \BaseController {

	 private $ProfilesForm;
    

     function __construct(ProfilesForm $profilesForm)
     {

     	$this->profilesForm  = $profilesForm;

     	$this->beforeFilter('currentUserFront', ['only' =>['edit','update'] ]);

     	$this->beforeFilter('csrf', ['only' =>['update'] ]);

     	$this->beforeFilter('shopowner', ['only' =>['edit','update'] ]);

     	
     }

	public function edit($username)
	{
		

		$user = User::whereUsername($username)->firstOrFail();


		return View::make('profile.front')->withUser($user)->with('title' , 'Update store front image');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /front/{usernmae}
	 *
	 * @param  int  $usernmae
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

       $input['image'] = Input::file('image');

		$this->profilesForm->validate($input);

		 if (Input::hasFile('image'))
        {

		$file       = Input::file('image');

		$name       = time() . '-' . $file->getClientOriginalName();

		$path       = Auth::user()->username.'/'.$name;

		$file       = $file->move(storage_path().'/files/', $name);

	    $image      = Imag::make($file->getRealPath())->resize('620','480')->save($file);

            Flysystem::put($path,$image);

           $input['image']  = 'https://s3-us-west-2.amazonaws.com/getdukaan/'.$path; 
           
           if (File::exists(storage_path().'/files/'. $name))
           {
              
             File::delete(storage_path(). '/files/'. $name);

           } 

        } 

         if (count($user->profile))

        {
        	 $user->profile->fill($input)->save();
        }

        else
		{
		    $profile = Profile::create($input);

		    $user->profile()->save($profile);
		}
		
		
            return Redirect::back()->with(['global' => 'Your front store image has been updated successfully updated ', 'type' => 'success']);      

	}

}

