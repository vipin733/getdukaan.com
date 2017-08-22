<?php

use Getdukaan\Forms\SignInForm;
use Getdukaan\Forms\ChangeForm;

class SessionsController extends \BaseController {

	


     private $signInForm;

      private $changeForm;
    

    public function __construct(SignInForm $signInForm, ChangeForm $changeForm)
     {
     
     	$this->signInForm = $signInForm;

     	$this->changeForm = $changeForm;
     }

	/**
	 * Show the form for creating a new login.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create')
		->with('header', 'Login GetDukaan.com');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{   
		$formData = Input::only('email', 'password');
		
		$this->signInForm->validate($formData);

		$remember =(Input::has('remember')) ? true : false;

        //$auth  = Auth::attempt($formData)

		if (Auth::attempt($formData,$remember))
		 {
			return Redirect::intended('/')->with([
		     'global' => 'Welcome back!', 
		      'type'  =>  'info'
		    ]);;
		 }else
		 {
		 	return Redirect::back()->with([
		 		'global'=> 'wrong email/password. please try again.', 
		 		'type' => 'danger']);
		 }
	}

	
	public function destroy()
	{
		Auth::logout();

		return Redirect::home()
		->with(['global'=>'You have loged out now.', 'type' => 'info']);;
	}

	public function getChange()
	{
		return View::make('sessions.change')->with('header', 'Change Password');
	}

	public function postChange()
	{
        $input = Input::get();

        $this->changeForm->validate($input);

        $user = User::find(Auth::user()->id);

        $old_password = Input::get('old_password');

        $password = Input::get('password');

        if (Hash::check( $old_password , $user->getAuthPassword())) 
        {
        	$user->password = $password;

        	if ($user->save())
        	 {
        		return Redirect::home()->with(['global'=>'Your password has been been changed','type' => 'success']);

        	 }else
        	 {
        	 	return Redirect::back()->with(['global'=> 'Your old password could not be changed','type' => 'danger']);
        	 }
        }

        return Redirect::back()->with(['global'=>'Your old password is incorrect.','type' => 'danger']);
	}

}


