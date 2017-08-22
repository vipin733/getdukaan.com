<?php namespace Getdukaan\Profiles;

use Laracasts\Commander\CommandHandler;
use Getdukaan\Profiles\ProfileRepository;
use Laracasts\Commander\Events\DispatchableTrait;
use Profile;

class UpdateProfileCommandHandler implements CommandHandler {

    /**
     * Handle the command.
     *
     * @param object $command
     * @return void
     */


     use DispatchableTrait;

     protected $profileRepository;




     function __construct(ProfileRepository $profileRepository)
     
     {
     	$this->profileRepository = $profileRepository;
     }


     public function handle($command)
     
     {
     	$profile = Profile::feed(

     		   $command->shopname,  $command->type, $command->subtype,  $command->timing, $command->weekend,

     		   $command->about, $command->country, $command->state,

     		   $command->district, $command->city, $command->block

     		); 
      	
          $this->profileRepository->save($profile, $command->userId);

          $this->dispatchEventsFor($profile);

     	return $profile;
     }

}