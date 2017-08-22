<?php namespace Getdukaan\Composers;

use DB, Auth;

Class PostComposer 
{
	public function compose($view)
	{
		if(Auth::check())
		{
		  $favorites = DB::table('favorites')->whereUserId(Auth::user()->id)->lists('profile_id');

		  

		  $view->with('favorites' ,$favorites);
		}
		
	}
}