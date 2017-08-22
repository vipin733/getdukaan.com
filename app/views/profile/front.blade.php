@extends('layouts.master')

@section('content')
  
  <div class="row">
   <div class="col-md-6 col-md-offset-3">
     <h1 class="profile-edit">Update front Shop image</h1>  
    {{  Form::model($user->profile, ['method' => 'PATCH', 'route' => ['front.update', $user->username] ,'files' =>true])}}
      

             <div class="form-group">
	              <lable for ="image">Select an image file:</lable>
	               {{ Form::file('image', ['class' => 'form-control'])}}
	          </div>

             <div class="form-group">
           	  {{ Form::submit('Update front Shop image', ['class' => 'btn btn-success']) }}
             </div>
    {{ Form::close() }}

   @include('profile.partials.image')

   </div>
</div>
@stop