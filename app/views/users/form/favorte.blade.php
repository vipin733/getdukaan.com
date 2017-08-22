@if(Auth::check())

@if($favorited = in_array($profile->id, $favorites))

 {{ Form::open(['method' => 'DELETE', 'route' => ['favorites.destroy', $profile->id]]) }}

@else

{{Form::open(['route' => 'favorites.store'])}}

{{Form::hidden('profile_id', $profile->id)}}

@endif

<button type="submit" class="btn-naked">
	<i class="fa fa-heart {{ $favorited ? 'favorited' : 'not-favorited' }}"></i>
</button>

{{Form::close()}}

@endif



