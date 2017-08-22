@extends('layouts.master')

@section('content')
  <h1 class="center">Dukaans</h1>
<div class="row">
 <div class="col-md-4 pull-right">
   @include('layouts.partials.search')
  </div>
  <div class="col-md-4 pull-left">
  </div>
</div>

@if($profiles->count())
  @foreach(array_chunk($profiles->all(), 4) as $row)
 
		  
            <div class="row">
		       @foreach($row as $profile)
                
	                <div class="col-md-3">
	                      <a href="{{ route('profile', $profile->user->username) }}">
			                  <h3 class="profile-edit">{{ $profile->storename }}</h3>
			              </a>
		                  <div class="thumbnail">
			                  <a href="{{ route('profile', $profile->user->username) }}">
                                  @if(count($profile->image))
                                      <img src="{{ $profile->image }}" alt="{{ $profile->title }}" class="img-rounded"></img>
                                  @else
                                      <img src="{{ asset('images/front.png') }}" alt="{{ $profile->title }}" class="img-rounded">
                                  @endif
			                  </a> 
			                  @include('users.form.favorte')
			                  @include('users.partials.likeall')
			                 @if(count($profile->views))
			                   <div class="viewss">
                               <i class="fa fa-eye"> {{ $profile->views }}</i>
                               </div>
                             @endif
					       </div> 	

					</div>
		        
               @endforeach
            </div>
 
  @endforeach

 {{ $profiles->links() }}

 @else
  <p>No dukaans found</p>
 @endif
@stop

@section('share')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550c70de573ab311" async="async"></script>



@stop