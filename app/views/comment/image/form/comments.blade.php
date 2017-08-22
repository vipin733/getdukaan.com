 @if($signedIn)

       {{ Form::open(['route' => ['comments_image_path', $image->id], 'class' => 'commentss__create-form']) }}

          {{ Form::hidden('image_id', $image->id) }}

          <div class="form-group">

             {{ Form::textarea('body', null, ['class' => 'form-control', 'required','rows' => 3, 'placeholder' => 'Comment about this item.']) }}
          
          </div>

          {{ Form::submit('Comment', ['class' => 'btn btn-primary']) }}

        {{ Form::close() }}
     @else    
      <h3>{{link_to_route('login_path','Log In')}} or {{link_to_route('login_path','Register!')}} and start comment about this Item.</h3>
     @endif
    <br>
     @unless($image->imagecomments->isEmpty())

        <div class="comments">

           @foreach($image->imagecomments as $comment)
                
               @include('comment.image.comments')

           @endforeach
           
        </div>

     @endunless