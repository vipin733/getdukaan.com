@extends('layouts.main')


@section('member')
 <div class="reset">
  <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
           <div class="page-header">
             <h1>Reset your password</h1>
           </div>
              @include('layouts.partials.errors')
            {{ Form::open() }}
            {{ Form::hidden('token' , $token) }}
              <div class="col-sm-10 col-sm-offset-1">
                 <div class="form-group">
                    {{ Form::email('email', null, ['class' => 'form-control input-lg', 'required', 'placeholder' => 'Please enter your email.']) }}
                </div>
            
                <div class="form-group">
                    {{ Form::password('password',['class' => 'form-control input-lg', 'required', 'placeholder' => 'Please enter your password.']) }}
                </div>

                <div class="form-group">
                    {{ Form::password('password_confirmation',['class' => 'form-control input-lg', 'required', 'placeholder' => 'Please confirm your password.']) }}
                </div>

                <!-- Reset Form Input -->
                <div class="form-group">
                    {{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                </div>
              </div> 
            {{ Form::close() }}
           </div> 
           <div class="panel-footer">
             
              {{ link_to_route('login_path' , 'Back to login!') }}
            
            </div> 
          </div> 
        </div>
     </div>
  </div>
 </div> 
@stop

