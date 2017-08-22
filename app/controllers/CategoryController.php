<?php


class CategoryController extends \BaseController {

	public function getEatery()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 2)->latest()->paginate(12);

		return View::make('category.eatery')
		->withProfiles($profiles)
		->with('title', 'Eatery');
	}

	public function getElectronics()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 3)->latest()->paginate(12);

		return View::make('category.electronics')
		->withProfiles($profiles)
		->with('title', 'Electronics');
	}

	public function getStationary()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 4)->latest()->paginate(12);

		return View::make('category.stationary')
		->withProfiles($profiles)
		->with('title', 'Stationary');
	}

	public function getDepartmentalstore()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 5)->latest()->paginate(12);

		return View::make('category.departmentalstore')
		->withProfiles($profiles)
		->with('title', 'Departmental store');
	}

	public function getClothsshoes()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 6)->latest()->paginate(12);

		return View::make('category.clothsshoes')
		->withProfiles($profiles)
		->with('title', 'Cloths & Shoes');
	}

	public function getServices()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 7)->latest()->paginate(12);

		return View::make('category.services')
		->withProfiles($profiles)
		->with('title', 'Services');
	}

	public function getSports()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 8)->latest()->paginate(12);

		return View::make('category.sports')
		->withProfiles($profiles)
		->with('title', 'Sports');
	}

	public function getFoodPlaza()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 9)->latest()->paginate(12);

		return View::make('category.foodPlaza')
		->withProfiles($profiles)
		->with('title', 'Food Plaza');
	}

	public function getGiftshop()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 10)->latest()->paginate(12);

		return View::make('category.giftshop')
		->withProfiles($profiles)
		->with('title', 'Gift Shop');
	}

	public function getEntertainment()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 11)->latest()->paginate(12);

		return View::make('category.entertainment')
		->withProfiles($profiles)
		->with('title', 'Entertainment');
	}

	public function getBuildingsupplies()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 12)->latest()->paginate(12);

		return View::make('category.buildingsupplies')
		->withProfiles($profiles)
		->with('title', 'Building Supplies');
	}

	public function getElectrical()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 13)->latest()->paginate(12);

		return View::make('category.electrical')
		->withProfiles($profiles)
		->with('title', 'Electrical');
	}

	public function getFashion()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 14)->latest()->paginate(12);

		return View::make('category.fashion')
		->withProfiles($profiles)
		->with('title', 'Fashion');
	}

	public function getAccessories()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 15)->latest()->paginate(12);

		return View::make('category.accessories')
		->withProfiles($profiles)
		->with('title', 'Accessories');
	}

	public function getHostelPg()
	{
		$profiles = Profile::with('user')->where('category_id', '=', 16)->latest()->paginate(12);

		return View::make('category.hostelpg')
		->withProfiles($profiles)
		->with('title', 'Hostel & P.G.');
	}

}