@extends('layouts.master')

@section('content')

   <h1 class="profile-edit">Edit your profile</h1>
   <div class="row">

     

      @include('profile.forms.update')
  
     
    
    </div>
@stop