<?php

use Getdukaan\Forms\RegistrationForm;
use Getdukaan\Registration\RegisterUserCommand;


class RegistrationController extends \BaseController {

     


     private $registrationForm;
    

     function __construct(RegistrationForm $registrationForm)
     {
     
     	$this->registrationForm = $registrationForm;
     }
	/**
	 * Display a a registration form for registration
	 * GET /registration
	**/
	public function create()
	{
		return View::make('registration.create')
		->with('header', 'Registration');
	}

	public function store()
	{
		$this->registrationForm->validate(Input::all());

        $user = $this->execute(RegisterUserCommand::class);                                                

		                                                   

         Auth::login($user);

		return Redirect::home()->with([
		  'global' => 'Thank you for register , to using getdukaan edit your dukaan profile', 
		   'type'  =>  'success'
		]);

		
	}

	
}