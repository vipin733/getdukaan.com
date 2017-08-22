<?php

class RemindersController extends BaseController {


    
	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('emails.password.remind')
		->with('header', 'Forgot password.');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		$response = Password::remind(Input::only('email'), function($message)

		{

          $message->subject('Reset your password for GetDukaan.com');

		});

		switch ($response) 

		{
			case Password::INVALID_USER:
				return Redirect::back()->with(["global" => "We can't find a user with that e-mail address.", 'type' => 'danger']);

			case Password::REMINDER_SENT:
				return Redirect::back()->with(['global' =>'We sent you a email.Check Your email!', 'type' => 'warning']);
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('emails.password.reset')->with('token', $token)
		 ->with('header', 'Reset Password');
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);

		$response = Password::reset($credentials, function($user, $password)
		{
			$user->password =$password;

			$user->save();
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			  return Redirect::back()->with(['global' => 'Passwords must be at least six characters and match the confirmation.' , 'type' => 'danger']);
			case Password::INVALID_TOKEN:
			  return Redirect::back()->with(['global' => 'This password reset token is invalid.' , 'type' => 'danger']);
			case Password::INVALID_USER:
				return Redirect::back()->with(["global" => "We can't find a user with that e-mail address." , 'type' => 'danger']);

			case Password::PASSWORD_RESET:
				return Redirect::to('/')->with(['global' => 'Your password has been reset.You may login.' , 'type' => 'success']);
		}
	}

}
