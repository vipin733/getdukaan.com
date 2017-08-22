<div class="row">
  <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-primary">
    <div class="panel-body">
     <div class="page-header" style="margin-top:5px;">
      <h1>Registration!</h1>
     </div>
       

        {{ Form::open(['route' => 'register_path','class' => 'form-horizontal']) }}
          <div class="col-sm-10 col-sm-offset-1">

           <div class="form-group {{$errors->has('username') ? 'has-error':''}}">
               <div class="input-group">
                   <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           	       {{ Form::text('username', null ,['class'=>'form-control input-lg' , 'placeholder' => 'Enter your username']) }}
               </div>
                   {{$errors->first('username','<span class="help-block">:message</span>')}}

           </div>

            <div class="form-group {{$errors->has('name') ? 'has-error':''}}">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-font"></span></span>
                    {{ Form::text('name', null ,['class'=>'form-control input-lg' , 'placeholder' => 'Enter your fullname']) }}
                </div>
                    {{$errors->first('name','<span class="help-block">:message</span>')}}


           </div>

           <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
               <div class="input-group">
                   <span class="input-group-addon">@</span>
           	       {{ Form::text('email', null ,['class'=>'form-control input-lg' ,'placeholder' => 'Enter your email']) }}
               </div>
                   {{$errors->first('email','<span class="help-block">:message</span>')}}

           </div>

           <div class="form-group {{$errors->has('password') ? 'has-error':''}}">
               <div class="input-group">
                   <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           	      {{ Form::password('password' , ['class'=>'form-control input-lg', 'placeholder' => 'Enter your password']) }}
               </div>
                  {{$errors->first('password','<span class="help-block">:message</span>')}}

           </div>

           <div class="form-group {{$errors->has('password_confirmation') ? 'has-error':''}}">
               <div class="input-group">
                   <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           	       {{ Form::password('password_confirmation' , ['class'=>'form-control input-lg', 'placeholder' => 'Confirm Password']) }}
               </div>
                   {{$errors->first('password_confirmation','<span class="help-block">:message</span>')}}


           </div>

          <div class="form-group {{$errors->has('role_id') ? 'has-error':''}}">
              <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-king"></span></span>
                 {{Form::select('role_id', array('1' => 'Shop owner', '2' => 'User'),null,['class' => 'form-control input-lg'] )}}
              </div>
                 {{$errors->first('role_id','<span class="help-block">:message</span>')}}


          </div>

           <div class="form-group {{$errors->has('g-recaptcha-response') ? 'has-error':''}}">

             {{ Form::captcha() }}
             </div>
             {{$errors->first('g-recaptcha-response','<span class="help-block">:message</span>')}}
             
           
             
           <div class="form-group">
           	{{ Form::submit('Sign Up', ['class' => 'btn btn-primary btn-lg']) }}                                   
           </div>
         {{ Form::close() }} 
        </div> 
      </div>  
            <div class="panel-footer">
             
              Already have account? {{ link_to_route('login_path' , 'Login!') }}
              <a href="{{URL::route('home')}}"> <button type="button" class="btn btn-success btn-lg pull-right ">Back to Home!</button></a><br><br> 
             
              {{link_to('/password/remind', 'Forgot Password?')}}
             
            </div> 
         
        
    
  </div>
 </div>
</div>