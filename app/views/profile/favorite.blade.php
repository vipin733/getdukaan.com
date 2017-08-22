@extends('layouts.master')

@section('content')
  <h1 class="profile-edit">Your favorite shop</h1><br>
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
			                 <img src="{{ $profile->image }}" alt="{{ $profile->title }}" class="img-rounded"></img>
			                  </a> 
			               
			                  @include('users.form.favorte')
			                 	   
					       </div> 	

					</div>
		        
               @endforeach
            </div>
 
  @endforeach
 @else
  <p>You dont have any favorite dukaan</p>
 @endif
@stop
