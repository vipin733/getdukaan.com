<?php namespace Getdukaan\Images;

use Laracasts\Commander\CommandHandler;
use Getdukaan\Images\ImageRepository;
use Laracasts\Commander\Events\DispatchableTrait;
use Image;

class UploadImageCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $imageRepository;

     function __construct(ImageRepository $imageRepository)
     
     {
        $this->imageRepository = $imageRepository;
     }
    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */
    public function handle($command)
    {
        
			
		  $file = Input::file('name');
		 
          $name = time() . '-' . $file->getClientOriginalName();

          $file = $file->move(public_path(). '\images', $name);

          $image->fileName = $file;
		   
	

         $image = Image::upload($command->title, $command->description, $command, $command->availabel);

         $this->imageRepository->save($image, $command->userId);

         $this->dispatchEventsFor($image);

         return $image;
    }

}