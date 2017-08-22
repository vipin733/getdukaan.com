<?php


class CommentImageController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store($id)
	{
		
		 $input = Input::all();

		 $image = Image::findOrFail($id);

		  $comment = new CommentImage;

		  $comment->user_id  = Auth::user()->id;
		  $comment->image_id  = $image->id;
		  $comment->body     = Input::get('body');
          
          if ($comment->save()) {
          	return Redirect::back();
          }

		  return Redirect::back();

	}

   public function edit($id)
   {
   	    $comment = CommentImage::findOrFail($id);

   	    $user = Auth::user();

   	    if(! $user->owns( $comment ) )
		   {
		   	return Redirect::home()->with(['global' => 'plz edit your comment', 'type' => 'danger']);
		   }

   	  return View::make('comment.image.edit')->withComment($comment)->with('title','edit comment');
   }

	public function update($id)
	{
		
        
        $input = Input::all();

        $comment = CommentImage::findOrFail($id);

		  $comment->body     = Input::get('body');
          
          if ($comment->update()) 
          {
            $profile = Image::find($comment->image_id)->id;

          	return Redirect::route('item_path', $profile)->with(['global' => 'your comment successfully edited', 'type' => 'success']);
          }

		  return Redirect::back();
	}

	public function destroy($id)
	{
		  $comment = CommentImage::findOrFail($id);

		  $user = Auth::user();

		   if(! $user->owns($comment))

		   {

		   	 return Redirect::home()->with(['global' => 'plz delete your comment', 'type' => 'danger']);

		   }

		   CommentImage::destroy($id);

		   return Redirect::back()->with(['global' => 'Comment deleted successfully.', 'type' => 'success']);
	}	

}
