                    

                    <div class="thumbnail">
                    <a href="{{ $image->file }}" class="fresco" >
                      <img src="{{ $image->file }}" alt="{{ $image->title }}" class="img-rounded">
                     </a> 
                      <p class="text-right">{{$image->created_at->diffForHumans()}}</p>
                      <p class="text-left text-left-margin">{{$image->updated_at->diffForHumans()}}</p>
                    </div>
                        <h3 style="margin-top:-20px; position:center;">{{ $image->title }}</h3>
                        <p>{{ $image->description }}</p>
                        <p>Availability: <strong>{{ $image->status }}</strong></p>
                        @if(isset($image->offer) && $image->offer)
                     <h4>Offer:<strong>{{$image->offer}}</strong></h4>
                    @else

                   @endif
                    
                    