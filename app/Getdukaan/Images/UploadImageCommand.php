<?php namespace Getdukaan\Images;



class UploadImageCommand {

    /**
     */
    public $userId;

	public $fileName;

	public $title;

	public $description;

	public $availabel;

	function __construct($userId, $fileName, $title, $description, $availabel)
	{
		
		$this->userId      = $userId;

		$this->fileName    = $fileName;

		$this->title       = $title ;

		$this->description = $description;

		$this->availabel   = $availabel;
	

	}

}