<?php

use Laracasts\Commander\CommanderTrait;
use Getdukaan\Comments\LeaveCommentOnStatusCommand;

class CommentController extends \BaseController {

	

	use CommanderTrait;

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store($id)
	{
		
		 $input = Input::all();

		 $profile = Profile::findOrFail($id);

		  $comment = new Comment;

		  $comment->user_id  = Auth::user()->id;
		  $comment->profile_id  = $profile->id;
		  $comment->body     = Input::get('body');
          
          if ($comment->save()) {
          	return Redirect::back();
          }

		  return Redirect::back();

	}

   public function edit($id)
   {
   	    $comment = Comment::findOrFail($id);

   	    $user = Auth::user();

   	    if(! $user->owns( $comment ) )
		   {
		   	return Redirect::home()->with(['global' => 'plz edit your comment', 'type' => 'danger']);
		   }

   	  return View::make('comment.edit')->withComment($comment)->with('title','edit comment');
   }

	/**
	 * @param $id
	 * @return mixed
     */
	public function update($id)
	{
		
        
        $input = Input::all();

        $comment = Comment::findOrFail($id);

		  $comment->body     = Input::get('body');
          
          if ($comment->update()) 
          {
            $profile = User::find($comment->profile_id)->username;

          	return Redirect::route('profile', $profile)->with(['global' => 'your comment successfully edited', 'type' => 'success']);
          }

		  return Redirect::back();
	}

	/**
	 * @param $id
	 * @return mixed
     */
	public function destroy($id)
	{
		  $comment = Comment::findOrFail($id);

		  $user = Auth::user();

		   if(! $user->owns($comment))

		   {

		   	 return Redirect::home()->with(['global' => 'plz delete your comment', 'type' => 'danger']);

		   }

		   Comment::destroy($id);

		   return Redirect::back()->with(['global' => 'Comment deleted successfully.', 'type' => 'success']);
	}	

}
