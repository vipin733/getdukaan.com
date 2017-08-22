@extends('layouts.master')

@section('content')

  <div class="row">

   <div class="col-md-6">
   

      @if($user->profile)

        @include('profile.show.details')
        
        @if($user->isCurrent())

           {{ link_to_route('profile.edit', 'Update your Shop profile', $user->username,['class' => 'btn btn-primary']) }}

        @endif

     </div>  

     <div class="col-md-6">

       @include('profile.show.front')


      </div>

         

        @else
          @if($user->isCurrent())
            <p class="donot">{{ link_to_route('profile.edit', 'Update Shop profile', $user->username,['class' => 'btn btn-primary']) }}</p>
           @else
            <p class="donot">No shop profile updated by this user.</p>
          @endif

    @endif

  </div>

  @if(count($user->profile))

     @include('profile.show.images')
     
  @endif

  @if(count($user->profile))

   <div class="row">
     
     <div class="col-md-8 col-md-offset-2">
        @include('comment.forms.coment')
     </div>
     

   </div>
    
     
  @endif
  
@stop

@section('share')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550c70de573ab311" async="async"></script>

@stop
