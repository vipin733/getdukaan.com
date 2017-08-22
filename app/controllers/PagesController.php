<?php

 use Getdukaan\Forms\ContactForm;

class PagesController extends \BaseController {

	protected $contactForm;

	function __construct(ContactForm $contactForm)

	{
        $this->contactForm = $contactForm;

        $this->beforeFilter('csrf', ['only' =>['postContact'] ]);
    }

	public function home()
	{
		$profiles = Profile::with('user')->orderBy('created_at','DESC')->take(6)->get(); 
		return View::make('pages.home')
		->withProfiles($profiles)
		->with('title', 'Welcome! to Your local dukaan site Getdukaan.com');
	}

	public function howto()
	{
		return View::make('pages.howto')
		->with('title', 'How to register your shop');
	}


	public function getContact()
	{
		return View::make('pages.contactus')
		->with('title', 'Contact us');
	}

	public function postContact()
	
	{
		$data = [
       
         'name'    => Input::get('name'),
         'subject' => Input::get('subject'),
         'email'   => Input::get('email'),
         'text'    => Input::get('text'),
         'g-recaptcha-response'    => Input::get('g-recaptcha-response')

		];

		$this->contactForm->validate($data);

		 Mail::send('emails.contact.contact', $data , function($message) use($data){

			$message->to('getdukaan@gmail.com')
			       ->cc('vipinoo7@hotmail.com')
			       ->subject($data['subject']);

		});

		return Redirect::back()->with(['global' => 'Your message successfully sent, We contact you very soon with email.', 'type' => 'success']);
	}

	public function postFeedback()
	
	{
		$data = [
       
         'name'    => Input::get('name'),
         'text'    => Input::get('text')
		];

		 Mail::send('emails.feedback.feedback', $data , function($message) use($data){

			$message->to('getdukaan@gmail.com')
			       ->cc('vipinoo7@hotmail.com')
			       ->subject('feedback');

		});

		return Redirect::back()->with(['global' => 'Thank you for giving some feedback.', 'type' => 'success']);
	}
}