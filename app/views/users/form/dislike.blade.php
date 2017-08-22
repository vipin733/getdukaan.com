

{{Form::open(['route' => 'likes.store'])}}

{{Form::hidden('profile_id', $profile->id)}}



<button type="submit" class="btn-naked">
	<i class="fa fa-thumbs-up"></i>
</button>

{{Form::close()}}
