<?php


class LikeController extends \BaseController {


	//public function show($username)
	//{
	  //$profiles = User::whereUsername($username)->firstOrFail()->favorites;


      //$favorites = DB::table('favorites')->whereUserId(Auth::user()->id)->lists('profile_id');

      //return View::make('profile.favorite', compact('profiles', 'favorites'))->with('title' , 'Your favorite dukaan');
    //}

    public function destroy($profileId)
    {

      
      
        Auth::user()->likes()->detach($profileId);

        return Redirect::back();
       
      
      
     
    	 
  }

    public function store()
    {
    	 Auth::user()->likes()->attach(Input::get('profile_id'));

       return Redirect::back();
    }


}