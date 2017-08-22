<div class="media comments__comment">

   <div class="pull-left">
   	   @include('users.partials.avatar', ['user' => $comment->owner, 'class' => 'media-object'])
   </div>
    <a href="{{ route('profile', $comment->owner->username) }}"><h3 class="media-heading status-media-heading">{{  $comment->owner->username }}</h3></a>
   <p class="text-left updated-comment">{{$comment->created_at->diffForHumans()}}</p>

    <div class="pull-right delete-edit">
      @if($comment->owner->isCurrent())
            <a href="{{URL::route('comments_edit_get', $comment->id)}}"><i class="fa fa-lg fa-pencil"></i></a>
            @include('comment.delete')
        @endif
    </div>
    
   <div class="media-body status-media-body">
       {{ $comment->body }}
   </div>

</div>