      <div class="row">

        <div class="col-md-6">
           <h1 class="up">Edit Image</h1>


           

            {{ Form::model($image, ['route' => ['store-images_path', $image->id], 'method'=>'put','files' =>true]) }}

                 @include('images.forms.form')

              <div class="form-group">

                  {{ Form::submit('Edit Image', ['class' => 'btn btn-primary']) }} 
                  
               </div>

            {{ Form::close() }}

        </div>

            <div class="col-md-4">

              @include('images.forms.show')

            </div>

     </div>