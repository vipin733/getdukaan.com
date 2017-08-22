<?php

class SitemapController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
       $sitemap = App::make("sitemap");

		  
		  
		  
		  $sitemap->add(URL::to('/'),  1, 'weekly');
		  
		  $sitemap->add(URL::to('profile.show'),'0.8', 'weekly');
		            
		  
		      $quotes = Profile::get();
		            
		 
		       foreach ($quotes as $quote) 
		       {
		          $sitemap->add(route('profile.show', $quote->id),
		          $quote->published_date, '0.4', 'yearly');
		       }

		       return $sitemap->render('xml');
	}



}
