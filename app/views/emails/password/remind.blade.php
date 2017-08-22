@extends('layouts.main')


@section('member')
 <div class="remind">
  <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="page-header" style="margin-top:5px;">
                <h1>Need to reset your password?</h1>
               </div> 
                   @include('layouts.partials.errors')
                    {{ Form::open() }}
                        <!-- Email Form Input -->
                      <div class="col-sm-10 col-sm-offset-1">  
                        <div class="form-group">
                            {{ Form::email('email', null, ['class' => 'form-control input-lg', 'required', 'placeholder' => 'Please enter your email.']) }}
                        </div>

                        <!-- Reset Form Input -->
                        <div class="form-group">
                            {{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                        </div>
                      </div> 
            </div>          
              <div class="panel-footer">
             
                 
                <a href="{{URL::route('home')}}"> <button type="button" class="btn btn-success btn-lg ">Back to Home!</button></a>

                <a href="{{URL::route('login_path')}}"> <button type="button" class="btn btn-warning btn-lg pull-right ">Go to Login!</button></a>
                   
                  </div> 
               {{ Form::close() }}
                   
        </div>
    </div>
</div>
@stop

