<?php namespace Getdukaan\Images;

use Image;
use User;

class ImageRepository {


  public function save(Image $image, $userId)
  {
  	return User::findOrFail($userId)->images()->save($image);
  }

  public function user_photos_path()
  {
  	return public_path() .'/images/';
  }

  public function getAllUser(User $user)
	{
         

        return $user->images()->with('user')->paginate(6);
	}

  public function editAllUser(Image $image, $id)
  {
     return Image::findOrFail($id)->with('user')->latest->paginate(6);
  }
	
}