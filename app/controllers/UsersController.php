<?php


class UsersController extends \BaseController {


	public function getProfile()
	{
		//$query = Request::get('q');
    // dd(Input::all());

			//$profiles = $query
			//? Profile::with('user')->where('storename','LIKE',"%$query%")->latest()->paginate(12)
		
			//: Profile::with('user')->latest()->paginate(12);

    $categories = Category::lists('name' ,'id');

     $subcategories = Subcategory::lists('name','id');

     // $category= Category::findOrFail(Input::get('category_id'));
    
     // Get the profile 
    //$profiles = Profile::with('user', 'category', 'subcategory')
      //->where('category_id', '=',Input::get('category_id'))
        //->orWhere('subcategory_id', '=', Input::get('subcategory_id'))
        //->latest()->paginate(12);
       

     if ($search = Request::get('q')) 
     {
      //$favorites = DB::table('favorites')->whereUserId(Auth::user()->id)->lists('profile_id');

     	$profiles = Profile::with('user','likes')->where(function($query) use ($search)
     		
     		{ 
     			$query->where('storename','LIKE',"%$search%")
                      ->orWhere('country','LIKE',"%$search%")
                      ->orWhere('about','LIKE',"%$search%")
                      ->orWhere('state','LIKE',"%$search%")
                      ->orWhere('district','LIKE',"%$search%")
                      ->orWhere('city','LIKE',"%$search%")
                      ->orWhere('zipcode','LIKE',"%$search%")
                      ->orWhere('location','LIKE',"%$search%")
                     ->orWhereHas('category', function ($q) use ($search) {
                        $q->where('name', 'LIKE',"%$search%");
                      })
                     ->orWhereHas('subcategory', function ($q) use ($search) {
                        $q->where('name', 'LIKE',"%$search%");
                      });
                      //->with(['Category' => function($qu){
                       // $query->where('name','LIKE',"%$search%");
                      //}]);
                      //->orWhere('category_id', '=', Input::get('category_id'))
                      //->orWhere('subcategory_id', '=', Input::get('subcategory_id'));

     		})
      //->where(function($query){
                   // $query->orWhere('category_id', '=', Input::get('category_id'))
                    ///->orWhere('subcategory_id', '=', Input::get('subcategory_id'));
                //})
               ->latest()->paginate(12);
     }

     else
     {
     	$profiles = Profile::with('user','likes')->latest()->paginate(12);
      //$profiles = Profile::with('user')->latest()->paginate(12);

     
     //$likes = DB::table('likes')->lists('user_id');
      //$likess = DB::table('likes')->whereUserId(Auth::user()->id)->lists('profile_id');
     
     }


		return View::make('users.profiless', compact('categories' , 'subcategories'))
		->withProfiles($profiles)
    //->withLikess($likess)
		->with('title', 'Brows Profile');
	}
	

}