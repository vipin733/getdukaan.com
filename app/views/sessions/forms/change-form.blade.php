@extends('layouts.main')


@section('member')
 <div class="reset">
  <div class="row">
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-body">
           <div class="page-header">
             <h1>Change your password</h1>
           </div>
             
            {{ Form::open(['route' => 'change_password']) }}
              <div class="col-sm-10 col-sm-offset-1">
                 <div class="form-group {{$errors->has('old_password') ? 'has-error':''}}">
                    {{ Form::password('old_password', ['class' => 'form-control input-lg', 'placeholder' => 'Please enter your old password.']) }}
                   {{$errors->first('old_password','<span class="help-block">:message</span>')}} 
                </div>
            
                <div class="form-group {{$errors->has('password') ? 'has-error':''}}">
                    {{ Form::password('password',['class' => 'form-control input-lg',  'placeholder' => 'Please enter your new password.']) }}
                    {{$errors->first('password','<span class="help-block">:message</span>')}} 
                </div>

                <div class="form-group {{$errors->has('password_confirmation') ? 'has-error':''}}">
                    {{ Form::password('password_confirmation',['class' => 'form-control input-lg','placeholder' => 'Please confirm your password.']) }}
                  {{$errors->first('password_confirmation','<span class="help-block">:message</span>')}}   
                </div>

                <!-- Reset Form Input -->
                <div class="form-group">
                    {{ Form::submit('Change Password', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                </div>
              </div> 
            {{ Form::close() }}
           </div> 
           <div class="panel-footer">
             
              {{ link_to_route('home' , 'Back to Home!') }}
            
            </div> 
          </div> 
        </div>
     </div>
  </div>
 </div> 
@stop

