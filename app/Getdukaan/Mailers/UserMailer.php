<?php namespace Getdukaan\Mailers;

use Illuminate\Mail\Mailer as Mail;
use User;

 class UserMailer extends Mailer{

	public function sendToWelcomeMessageTo(User $user)
	{
         $subject = 'Welcome to Getdukaan.com';

         $view    = 'emails.registration.confirm';

         return $this->sendTo($user, $subject, $view);
	}
}