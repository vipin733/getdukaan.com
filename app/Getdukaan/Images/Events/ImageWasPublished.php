<?php  namespace Getdukaan\Images\Events;

use Image;

class ImageWasPublished
{
	public $userId;

	public $fileName;

	public $title;

	public $description;

	public $availabel;

	function __construct($userId, $fileName, $title, $description, $availabel)
	{
		
		$this->userId      = $userId;

		$this->image       = $image;

		$this->title       = $title ;

		$this->description = $description;

		$this->availabel   = $availabel;
	

	}
}