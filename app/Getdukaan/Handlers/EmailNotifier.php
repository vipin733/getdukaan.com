<?php namespace Getdukaan\Handlers;

use Laracasts\Commander\Events\EventListener;
use Getdukaan\Registration\Events\UserRegistered;
use Getdukaan\Mailers\UserMailer;



class EmailNotifier extends EventListener{


	public function __construct(UserMailer $mailer)
	{
		$this->mailer = $mailer;
	}

	public function whenUserRegistered(UserRegistered $event)
	{
       $this->mailer->sendToWelcomeMessageTo($event->user);
	}

}