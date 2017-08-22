@extends('layouts.master')

@section('content')

     <div class="row">

      <div class="col-md-8">
       
        <h3 class="profile-edit">{{ $image->title }}</h3>
        
         <h4>By <a href="{{route('profile', $image->user->username)}}">{{ $image->user->username }}</a> </h4>
        
          <h4>About</h4><p>{{$image->description }}</p>
          @if(isset($image->offer) && $image->offer)
           <h4>Offer on this item: <strong>{{$image->offer}}</strong></h4>
          @else

          @endif
          <p>Availability: <strong>{{ $image->status }}</strong></p>
      	
      </div>

      <div class="col-md-4">

        <div class="thumbnail">
               <a href="{{ $image->file }}" class="fresco"  data-fresco-group="{{$image->user->username}}">
                <img src="{{ $image->file }}" alt="{{ $image->title }}" class="img-rounded">
               </a>
               <p class="text-right">{{$image->created_at->diffForHumans()}}</p>
               <p class="text-left text-left-margin">{{$image->updated_at->diffForHumans()}}</p>
         </div>
      	

      </div>
     	
     </div>
		<div class="row">
      <div class="col-md-8 col-md-offset-2">
        @include('comment.image.form.comments')
      </div>  
    </div>           
     
@stop

@section('share')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550c70de573ab311" async="async"></script>

@stop