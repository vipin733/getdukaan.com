<div class="row">
         
         <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-body">
                     <div class="page-header" style="margin-top:5px;">
                       <h1>Login GetDukaan.com</h1>
                     </div>
                               
                    

                    {{ Form::open(['route' => 'login_path', 'class' => 'form-horizontal']) }}

                     <div class="col-sm-10 col-sm-offset-1">

                      <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
                          <div class="input-group">
                              <span class="input-group-addon">@</span>
                             {{ Form::text('email', null, ['class'=>'form-control input-lg','placeholder' => 'Enter your email']) }}

                           </div>

                        {{$errors->first('email','<span class="help-block">:message</span>')}}
                       </div>

                       <div class="form-group {{$errors->has('password') ? 'has-error has-feedback':''}}">
                           <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                            {{ Form::password('password' , ['class'=>'form-control input-lg', 'placeholder' => 'Enter your password']) }}
                            </div>
                        {{$errors->first('password','<span class="help-block">:message</span>')}}
                       </div>

                        <div class="form-group">
                         {{ Form::checkbox('remember') }}
                         <lable for="remember">Remember Me</lable>
                         </div>

                       <div class="form-group">
                        {{ Form::submit('Sign In', ['class' => 'btn btn-primary btn-lg btn-block']) }}
                       </div> 
                    </div>  
                  {{ Form::close() }}  
                </div>   
                  <div class="panel-footer">      
                       <div class="form-group">
                        Need account? {{ link_to('/register', 'Register here' ) }}
                        <a href="{{URL::route('home')}}"> <button type="button" class="btn btn-success btn-lg pull-right ">Back to Home!</button></a>
                       </div>

                       <div class="form-group">
                         {{link_to('/password/remind', 'Forgot Password?')}}
                       </div>
                  </div>
                 
                
             </div>
         </div>
         
    </div>
