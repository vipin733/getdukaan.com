           
           <a href="{{ route('profile', $user->username) }}">
            
            <img class="media-object" src="{{ $user->gravatarLink(isset($size) ? $size : 30) }}" alt="{{$user->username}}">

            </a>
    