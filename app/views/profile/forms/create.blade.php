

     {{  Form::open(['route' => 'profiles.update' ,'files' =>true]) }}
                <div class="col-md-4">

                   
                  @include('profile.partials.about-form')
               

                  </div>

                 <div class="col-md-3">

                  @include('profile.partials.address-form')
                   {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
                 </div>
                 <div class="col-md-5">
                   @include('profile.partials.image')
                 </div>
              
                  
      {{ Form::close() }}