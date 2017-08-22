{{ Form::open(['route' => 'post_contact','class' => 'form-horizontal']) }}
          <div class="col-sm-10 col-sm-offset-1">

           <div class="form-group">
             
            {{ Form::text('name', null ,['class'=>'form-control' ,  'placeholder' => 'Enter your fullname']) }}

           </div>

            <div class="form-group">
             
            {{ Form::text('subject', null ,['class'=>'form-control' , 'placeholder' => 'Enter your subject']) }}

           </div>

           <div class="form-group">
            
            {{ Form::text('email', null ,['class'=>'form-control' , 'placeholder' => 'Enter your email']) }}

           </div>

           <div class="form-group">
            
            {{ Form::textarea('text', null ,['class'=>'form-control' ,'rows' => 6,'placeholder' => 'Say what you want with us...']) }}

           </div>

           
           <div class="form-group">

             {{ Form::captcha() }}

             </div>
           
             
           <div class="form-group">
            {{ Form::submit('Send!', ['class' => 'btn btn-primary pull-left']) }}
             <button class="btn btn-danger pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button> 
          </div>
       
        </div>

    {{ Form::close() }}   