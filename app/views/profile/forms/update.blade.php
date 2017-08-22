


     {{  Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username] ,'files' =>true]) }}
                <div class="col-md-4">

                   
                  @include('profile.partials.about-form')
               

                  </div>

                 <div class="col-md-3">

                  @include('profile.partials.address-form')
                   {{ Form::submit('Update Shop Profile', ['class' => 'btn btn-primary']) }}
                 </div>
                 <div class="col-md-5">
                 @if (count($user->profile))
                   @include('profile.partials.image')
                  <div class="profile-edit">
                   {{ link_to_route('front.edit', 'Update your Shop front image', $currentUser->username,['class' => 'btn btn-primary']) }}
                  </div> 
                 @endif  
                 </div>
                
                  
      {{ Form::close() }}