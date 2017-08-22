@forelse(array_chunk($user->images->all(), 3) as $row)
      <div class="row">
        @foreach($row as $image)
          <div class="col-md-4">
            <div class="thumbnail">
                <a href="{{ $image->file }}" class="fresco" data-fresco-group="{{$user->username}}">
                  <img src="{{ $image->file }}" alt="{{ $image->title }}" class="img-rounded">
                </a>
               <p class="text-right">{{$image->created_at->diffForHumans()}}</p>
               <p class="text-left text-left-margin">{{$image->updated_at->diffForHumans()}}</p>
                 
                <div class="caption">
                      <a href="{{route('item_path', $image->id)}}">
                        <h3 style="margin-top:-20px; position:center;">{{ $image->title }}</h3>
                      </a> 
                   <p>{{ str_limit($image->description, 30) }}</p>
                   <p>Availability: <strong>{{ $image->status }}</strong></p>
                    @if(isset($image->offer) && $image->offer)
                     <h4>Offer:<strong>{{$image->offer}}</strong></h4>
                    @else

                   @endif
              @if($user->isCurrent())
              
                  @include('images.partials.edit-delete')
                
                @else
              @endif 
                </div>
            </div>
          
          </div>
        @endforeach
      </div>
     @empty
      @if($user->isCurrent())
      <p class="pull-right">You dont have any image<br>
        {{ link_to_route('images_path', 'Upload Image', null, ['class' => 'btn btn-primary']) }}</p>
       @else
        <p class="donot">This shop user not uploaded any image yet.</p>
      @endif
@endforelse
