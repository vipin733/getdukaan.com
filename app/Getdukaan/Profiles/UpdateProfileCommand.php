<?php namespace Getdukaan\Profiles;

class UpdateProfileCommand {

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

	public $userId;

	function __construct($shopname, $type ,$subtype, $timing, $weekend, $about, $country, $state, $district, $city, $block, $userId)

	{
		
		$this->shopname    = $shopname;
		$this->type        = $type;
		$this->subtype     = $subtype;
		$this->timing      = $timing;
		$this->weekend     = $weekend;
		$this->about       = $about;
		
		$this->country     = $country;
		$this->state       = $state;
		$this->district    = $district;
		$this->city        = $city;
		$this->block       = $block;
		$this->userId      = $userId;

	}
    

}