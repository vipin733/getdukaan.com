<?php namespace Getdukaan\Profiles\Filter;

use Illuminate\Session\Store;

class ViewThrottleFilter
{
    private $session;

    public function __construct(Store $session)
    {
        // Let Laravel inject the session Store instance,
        // and assign it to our $session variable.
        $this->session = $session;
    }

    public function filter()
    {
        $profiles = $this->getViewedProfiles();

        if ( ! is_null($profiles))
        {
            $profiles = $this->cleanExpiredViews($profiles);

            $this->storeProfiles($profiles);
        }
    }

    private function getViewedProfiles()
    {
        // Get all the viewed posts from the session. If no
        // entry in the session exists, default to null.
        return $this->session->get('viewed_profile', null);
    }

    private function cleanExpiredViews($profiles)
    {
        $time = time();

        $throttleTime = 1;

        return array_filter($profiles, function ($timestamp) use ($time, $throttleTime)
        {
            return ($timestamp + $throttleTime) > $time;
        });

    }

    private function storeProfiles($profiles)
    {
        $this->session->put('viewed_profile', $profiles);
    }
}