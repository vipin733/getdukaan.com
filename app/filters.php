<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('login');
		}
	}
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() !== Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

Route::filter('currentUser', function($route)
{
      if (Auth::guest()) return Redirect::route('login_path');

      if (Auth::user()->username !==$route->parameter('profile')) 
      	
      {
      	return Redirect::home()->with(['global' => 'Sorry edit your profile.', 'type' => 'danger']);
      }

});

Route::filter('currentUserStatus', function($route)
{
      if (Auth::guest()) return Redirect::route('login_path');

      if (Auth::user()->username !==$route->parameter('active')) 
      	
      {
      	return Redirect::home()->with(['global' => 'Sorry edit your status.', 'type' => 'danger']);
      }

});

Route::filter('currentUserFront', function($route)
{
      if (Auth::guest()) return Redirect::route('login_path');

      if (Auth::user()->username !==$route->parameter('front')) 
      	
      {
      	return Redirect::home()->with(['global' => 'Sorry edit your store image.', 'type' => 'danger']);
      }

});

Route::filter('shopowner',function()
	{
		if(Auth::user()->role_id !=1)
		{
			return Redirect::home()->with(['global' => 'You are not authorized', 'type' => 'danger']);
		}
	});

Route::filter('profile.view_throttle', 'Getdukaan\Profiles\Filter\ViewThrottleFilter');
