<nav class="navbar navbar-default navbar-static-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="getdukaan.com"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home') }}">Home <span class="sr-only">(current)</span></a></li>
         <li>{{ link_to_route('users_path_profile', 'Browse Dukaans') }}</li>
          @include('layouts.partials.navedrop')
         <li>{{ link_to_route('howto', 'How To') }}</li>
         <li><a href="" data-toggle="modal" data-target="#myModal">Contact us</a></li>
                @include('layouts.modal.contact')
         
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       @if($currentUser)
       
     
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
             <img class="nav-gravatar" src="{{ $currentUser->gravatarLink() }}" alt="{{$currentUser->username}}">
             {{$currentUser->username}}<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
        @if($shopowner)
           <li>{{ link_to_route('profile.edit', 'Update Shop profile', $currentUser->username) }}</li>
           
           
            <li>{{ link_to_route('images_path','Upload Product Image') }}</li>
            <li>{{ link_to_route('active.edit', 'My Shop status', $currentUser->username) }}</li>
            <li>{{ link_to_route('favorites_your','My Favorite Shop', $currentUser->username) }}</li>
            <li>{{ link_to_route('profile', 'My Shop', $currentUser->username) }}</li>
           
            <li class="divider"></li>
            <li>{{link_to_route('change_password', 'Change Password')}}</li>
            <li>{{link_to_route('logout_path', 'Logout')}}</li>
           @else
           <li>{{ link_to_route('favorites_your','My Favorite Shop', $currentUser->username) }}</li>
           
            <li class="divider"></li>
            <li>{{link_to_route('change_password', 'Change Password')}}</li>
            <li>{{link_to_route('logout_path', 'Logout')}}</li>
          </ul>
        </li>            
          @endif 
        @else
            <li>{{link_to_route('register_path', 'Register')}}</li>

            <li>{{link_to_route('login_path',     'Log In')}}</li>
        @endif
      </ul>
    </div>       
  </div>
</nav>

