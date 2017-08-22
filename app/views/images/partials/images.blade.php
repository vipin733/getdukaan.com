      
  
                @forelse(array_chunk($images->getCollection()->all(), 3) as $row)
                  <div class="row">
                      @foreach($row as $image)
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                             <a href="{{ $image->file }}" class="fresco"  data-fresco-group="{{$image->user->username}}">
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
                               @include('images.partials.edit-delete')
                            </div>
                          </div>
                        </div>                
                      @endforeach
                  </div>  
                      @empty

                        <p class="donot">You don't have any image yet.</p>
                @endforelse
 
                {{ $images->links() }}

                
    

    