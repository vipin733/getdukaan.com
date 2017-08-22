<?php namespace Getdukaan\Profiles\Events;

use Profile;

class ProfileUpdated {

    /**
     */

    public $shopname;

	public $type;

	public $subtype;

	public $timing;

	public $weekend;

	public $about;



	public $country;

	public $state;

	public $district;

	public $city;

	public $block;



	function __construct($shopname, $type, $subtype, $timing, $weekend, $about, $country, $state, $district, $city, $block)

	{
		
		$this->shopname   = $shopname;
		$this->type        = $type;
		$this->timing      = $timing;
		$this->weekend     = $weekend;
		$this->about       = $about;
		
		$this->country     = $country;
		$this->state       = $state;
		$this->district    = $district;
		$this->city        = $city;
		$this->block       = $block;
		

	}
    

}