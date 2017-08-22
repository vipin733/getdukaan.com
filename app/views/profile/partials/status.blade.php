@extends('layouts.master')

@section('content')
  
  <div class="row">
   <div class="col-md-6 col-md-offset-3">
     <h1 class="profile-edit">Update status</h1>  
    {{  Form::model($user->profile, ['method' => 'PATCH', 'route' => ['active.update', $user->username]])}}
      

             <div class="form-group">
	             <lable for="status" class="control-label">Current status of your store?:</lable>
	             {{Form::select('status',['Open' => 'Open', 'Close' => 'Close'],null,['class' => 'form-control'])}}
             </div>

             <div class="form-group">
           	  {{ Form::submit('Update', ['class' => 'btn btn-success']) }}
             </div>
    {{ Form::close() }}

   </div>
</div>
@stop