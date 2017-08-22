      <div class="row">
        <div class="col-md-6 col-md-offset-3">
           <h1 class="up">Upload Image</h1>
            
           
            {{ Form::open(['route' => 'images_path_post','files' =>true,'class'=>"form-horizontal"]) }}

                 @include('images.forms.form')

              <div class="form-group">
                  {{ Form::submit('Upload Image', ['class' => 'btn btn-primary']) }} 
               </div>
            {{ Form::close() }}
        </div>
    </div>