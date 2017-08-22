 @if($signedIn)

       {{ Form::open(['route' => ['comments_path', $user->profile->id], 'class' => 'commentss__create-form']) }}

          {{ Form::hidden('profile_id', $user->profile->id) }}

          <div class="form-group">

             {{ Form::textarea('body', null, ['class' => 'form-control', 'required','rows' => 3, 'placeholder' => 'Comment about this dukaan.']) }}
          
          </div>

          {{ Form::submit('Comment', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
     @else    
      <h3>{{link_to_route('login_path','Log In')}} or {{link_to_route('login_path','Register!')}} and start comment about this dukaan.</h3>
     @endif
    <br>
     @unless($user->profile->comments->isEmpty())

        <div class="comments">

           @foreach($user->profile->comments as $comment)
                
               @include('comment.comment')

           @endforeach
           
        </div>

     @endunless