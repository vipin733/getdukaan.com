<?php namespace Getdukaan\Composers;

use DB, Auth;

Class PostLikeComposer 
{
	public function compose($view)
	{
		if(Auth::check())
		{
		  $likes = DB::table('likes')->whereUserId(Auth::user()->id)->lists('profile_id');

		  

		  $view->with('likes' ,$likes);
		}
		
	}
}