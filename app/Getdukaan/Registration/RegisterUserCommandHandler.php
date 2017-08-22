<?php namespace Getdukaan\Registration;

use Laracasts\Commander\CommandHandler;
use Getdukaan\Users\UserRepository;
use Laracasts\Commander\Events\DispatchableTrait;
use User;



class RegisterUserCommandHandler implements CommandHandler
{

     use DispatchableTrait;

     protected $userRepository;




     function __construct(UserRepository $userRepository)
     
     {
     	$this->userRepository = $userRepository;
     }


     public function handle($command)
     
     {
     	$user = User::register(

     		   $command->username,  $command->name , $command->email,  $command->password ,$command->role_id 
     		); 
      	
          $this->userRepository->save($user);

          $this->dispatchEventsFor($user);

     	return $user;
     }

}