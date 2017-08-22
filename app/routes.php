  <?php
Route::when('*', 'profile.view_throttle');

Route::get('/', ['as' => 'home' , 'uses' => 'PagesController@home']);

Route::get('/sitemap', ['as' => 'sitemap' , 'uses' => 'SitemapController@index']);

Route::get('/contact_us', ['as' => 'get_contact' , 'uses' => 'PagesController@getContact']);

Route::post('/', ['as' => 'post_contact' , 'uses' => 'PagesController@postContact']);

Route::get('/feedback', ['as' => 'get_feedback' , 'uses' => 'PagesController@getFeedback']);

Route::post('/', ['as' => 'post_feedback' , 'uses' => 'PagesController@postFeedback']);

Route::get('/how_to', ['as' => 'howto' , 'uses' => 'PagesController@howto']);

Route::controller('/password', 'RemindersController');

Route::get('/dukaans', ['as' => 'users_path_profile' , 'uses' => 'UsersController@getProfile']);

Route::get('/privacy', ['as' => 'privacy_path' , 'uses' => 'PrivacyAndTermsController@getPrivacy']);

Route::get('/terms_use', ['as' => 'terms_path' , 'uses' => 'PrivacyAndTermsController@getTerms']);

Route::get('/item/{id}', ['as' => 'item_path' , 'uses' => 'ImageController@getItem']);

Route::get('/category/eatery', ['as' => 'eatery' , 'uses' => 'CategoryController@getEatery']);

Route::get('/category/electronics', ['as' => 'electronics' , 'uses' => 'CategoryController@getElectronics']);

Route::get('/category/stationary', ['as' => 'stationary' , 'uses' => 'CategoryController@getStationary']);

Route::get('/category/departmental_store', ['as' => 'departmentalstore' , 'uses' => 'CategoryController@getDepartmentalstore']);

Route::get('/category/Cloths_and_shoes', ['as' => 'clothsshoes' , 'uses' => 'CategoryController@getClothsshoes']);

Route::get('/category/services', ['as' => 'services' , 'uses' => 'CategoryController@getServices']);

Route::get('/category/sports', ['as' => 'sports' , 'uses' => 'CategoryController@getSports']);

Route::get('/category/food_plaza', ['as' => 'food_plaza' , 'uses' => 'CategoryController@getFoodPlaza']);

Route::get('/category/giftshop', ['as' => 'giftshop' , 'uses' => 'CategoryController@getGiftshop']);

Route::get('/category/entertainment', ['as' => 'entertainment' , 'uses' => 'CategoryController@getEntertainment']);

Route::get('/category/buildingsupplies', ['as' => 'buildingsupplies' , 'uses' => 'CategoryController@getBuildingsupplies']);

Route::get('/category/electrical', ['as' => 'electrical' , 'uses' => 'CategoryController@getElectrical']);

Route::get('/category/fashion', ['as' => 'fashion' , 'uses' => 'CategoryController@getFashion']);

Route::get('/category/accessories', ['as' => 'accessories' , 'uses' => 'CategoryController@getAccessories']);

Route::get('/category/hostel_pg', ['as' => 'hostel_pg' , 'uses' => 'CategoryController@getHostelPg']);







Route::group(array('before' => 'guest'), function(){
  
    Route::group(['before' => 'csrf'] , function(){
      
      Route::post('/register' , ['as'=> 'register_path', 'uses' => 'RegistrationController@store']);

      Route::post('/login' ,['as'=> 'login_path', 'uses' => 'SessionsController@store']);

    });

    Route::get('/register' ,['as'=> 'register_path', 'uses' => 'RegistrationController@create']);

    Route::get('/login' ,['as'=> 'login_path', 'uses' => 'SessionsController@create']);

}); 

Route::group(array('before' => 'auth'), function()
	{
     
     Route::group(['before' => 'csrf'] , function(){

      Route::post('/likes' , ['as' => 'likes.store' , 'uses' => 'LikeController@store']);

      Route::delete('/likes/{profileId}' , ['as' => 'likes.destroy' , 'uses' => 'LikeController@destroy']);

      Route::post('/change_password', ['as' => 'change_password', 'uses'=> 'SessionsController@postChange']);

    	Route::post('/upload_image', ['as' => 'images_path_post' , 'uses' => 'ImageController@store']); 

       Route::post('profile/{id}/comments', ['as' => 'comments_path', 'uses' => 'CommentController@store']);

       Route::post('image/{id}/comments', ['as' => 'comments_image_path', 'uses' => 'CommentImageController@store']);

       Route::put('/image/comment/{id}/edit', ['as' => 'comments_image_update_path', 'uses' => 'CommentImageController@update']);

       Route::put('comment/{id}/edit', ['as' => 'comments_edit', 'uses' => 'CommentController@update']);

      Route::put('/update-image/{id}/edit', ['as' => 'store-images_path' , 'uses' => 'ImageController@update']);
      
       Route::delete('delete/{id}/image', ['as' => 'delete-images_path' , 'uses' => 'ImageController@destroy']);

       Route::delete('comment/{id}/delete', ['as' => 'comments_delete_get', 'uses' => 'CommentController@destroy']);

       Route::delete('/item/{id}', ['as' => 'comments_image_delete_path', 'uses' => 'CommentImageController@destroy']);
     });

     Route::get('/profile/{username}/favorites', ['as' => 'favorites_your', 'uses' => 'FavorateController@show']);

    Route::get('/logout', ['as' => 'logout_path', 'uses'=> 'SessionsController@destroy']);

    Route::get('comment/{id}/edit', ['as' => 'comments_edit_get', 'uses' => 'CommentController@edit']);

     Route::get('/image/comment/{id}/edit', ['as' => 'comments_image_edit_get', 'uses' => 'CommentImageController@edit']);

    

    Route::get('/change_password', ['as' => 'change_password', 'uses'=> 'SessionsController@getChange']);

    Route::get('/upload_image', ['as' => 'images_path' , 'uses' => 'ImageController@create']);

    Route::get('/update_image/{id}/edit', ['as' => 'edit-images_path' , 'uses' => 'ImageController@edit']);

   

   



});

  Route::group(['before' => 'csrf'] , function(){  

      Route::delete('/favorites/{profileId}' , ['as' => 'favorites.destroy' , 'uses' => 'FavorateController@destroy']);
     
      Route::post('/favorites' , ['as' => 'favorites.store' , 'uses' => 'FavorateController@store']);




});



Route:: get('categories/{code}/subcategory.json', function($code)
{
    return Subcategory::where('category_id', $code)->get();
});

Route:: get('states/{code}/districs.json', function($code)
{
    return District::where('state_id', $code)->get();
});

Route:: get('districs/{code}/cities.json', function($code)
{
    return City::where('district_id', $code)->get();
});

Route:: get('cities/{code}/blocks.json', function($code)
{
    return Block::where('city_id', $code)->get();
});


Route::resource('active', 'ActiveController', ['only' => ['edit' , 'update']]);

Route::resource('profile', 'ProfilesController', ['only' => ['show','edit' , 'update']]);

Route::resource('front', 'FrontController', ['only' => ['edit', 'update']]);

Route::get('/{profile}', ['as'=> 'profile', 'uses'=>'ProfilesController@show']);



	