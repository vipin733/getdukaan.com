

@if(Auth::check())

    @if($liked = in_array($user->profile->id, $likes))

        {{ Form::open(['method' => 'DELETE', 'route' => ['likes.destroy',  $user->profile->id]]) }}

    @else

        {{Form::open(['route' => 'likes.store'])}}

        {{Form::hidden('profile_id', $user->profile->id)}}

    @endif

    <button  type= "submit" class="btn-naked">
        <i class="{{ $liked ? 'fa fa-thumbs-down' : 'fa fa-thumbs-up' }}"></i>
    </button>

    {{Form::close()}}

@endif