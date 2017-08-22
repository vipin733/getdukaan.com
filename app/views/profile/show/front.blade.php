
        <div class="thumbnail">
           <a href="{{$user->profile->image }}" class="fresco" data-fresco-caption="{{ $user->profile->storename }}">
               @if(count($user->profile->image))
                   <img src="{{ $user->profile->image }}" alt="{{ $user->profile->storename }}" class="img-rounded"></img>
               @else
                   <img src="{{ asset('images/front.png') }}" alt="{{ $user->profile->storename }}" class="img-rounded">
               @endif
           </a>

                @if($user->isCurrent())
                    @if(count($user->profile->likes))
                        <h3>{{$user->profile->likes->count()}} people like your shop</h3>
                    @endif
                    @if(count($user->profile->favorites))
                        <h3>{{$user->profile->favorites->count()}} people have favorited your shop</h3>
                    @endif
                @else
                    @if(count($user->profile->likes))
                        <h3><i class="fa fa-thumbs-up"></i> {{$user->profile->likes->count()}}</h3>
                    @endif
                    @if(count($user->profile->favorites))
                       <div class="pull-right favritedsf">
                        <h3> {{$user->profile->favorites->count()}} <i class="fa fa-heart"></i></h3>
                       </div>
                    @endif
                @endif

        </div>

