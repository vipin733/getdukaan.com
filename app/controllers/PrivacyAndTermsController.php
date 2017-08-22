<?php

class PrivacyAndTermsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /privacy
	 *
	 * @return Response
	 */
	public function getPrivacy()
	{
		return View::make('pages.privacy')->with('title','Privacy Policy');
	}


    public function getTerms()
	{
		return View::make('pages.terms')->with('title','Terms of Use');
	}
	

}