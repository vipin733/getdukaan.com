<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="profile-edit" style="color:white;">We'd Love to Hear From You</h3>
      </div>
      <div class="modal-body">
      
       {{ Form::open(['route' => 'post_contact','class' => 'form-horizontal']) }}
        <div class="col-sm-10 col-sm-offset-1">

           <div class="form-group {{$errors->has('name') ? 'has-error':''}}">
             
             {{ Form::text('name', null ,['class'=>'form-control' ,  'placeholder' => 'Enter your fullname']) }}
             {{$errors->first('name','<span class="help-block">:message</span>')}} 

           </div>

           <div class="form-group {{$errors->has('subject') ? 'has-error':''}}">
             
               {{ Form::text('subject', null ,['class'=>'form-control' , 'placeholder' => 'Enter your subject']) }}
               {{$errors->first('subject','<span class="help-block">:message</span>')}} 

           </div>

          <div class="form-group {{$errors->has('email') ? 'has-error':''}}">
            
            {{ Form::text('email', null ,['class'=>'form-control' , 'placeholder' => 'Enter your email']) }}
             {{$errors->first('email','<span class="help-block">:message</span>')}} 

           </div>

           <div class="form-group {{$errors->has('text') ? 'has-error':''}}">
            
            {{ Form::textarea('text', null ,['class'=>'form-control' ,'rows' => 6,'placeholder' => 'Say what you want with us...']) }}
             {{$errors->first('text','<span class="help-block">:message</span>')}}
             
           </div>

           
          <div class="form-group {{$errors->has('g-recaptcha-response') ? 'has-error':''}}">

             {{ Form::captcha() }}
             {{$errors->first('g-recaptcha-response','<span class="help-block">:message</span>')}}

          </div>
           
             
           <div class="form-group">
            {{ Form::submit('Send!', ['class' => 'btn btn-primary pull-left']) }}
             <button class="btn btn-danger pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button> 
          </div>
       
        </div>

    {{ Form::close() }}   
      </div>
      <div class="modal-footer">
       <addres class = "pull-left">
          Contact no.:- +91-7696446317, +91-7696195285<br>
          <div class="pull-left">Watsapp:-7696189372</div>
       </addres>
      </div>
    </div>
  </div>
</div>