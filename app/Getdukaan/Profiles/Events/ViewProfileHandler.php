<?php namespace Getdukaan\Profiles\Events;

use Profile;
use User;
use Illuminate\Session\Store;

class ViewProfileHandler {

	 private $session;

    public function __construct(Store $session)
    {
        // Let Laravel inject the session Store instance,
        // and assign it to our $session variable.
        $this->session = $session;
    }

	 public function handle(User $user)
	 {
       if ( ! $this->isProfileViewed($user))
       {
       	  $user->profile->increment('views');

          //$user->profile->views = $user->profile->increment('views');

	 	       $user->profile->views += 1;

	 	        $this->storeProfile($user);

       }

	 	
	 }

	 private function isProfileViewed($profile)
    {
        $viewed = $this->session->get('viewed_profile', []);
        
        return array_key_exists($profile->id, $viewed);
    }

    private function storeProfile($profile)
    {    
        $key = 'viewed_profile.' . $profile->id;

        $this->session->put($key, time());
    }

    
}