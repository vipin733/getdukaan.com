@extends('layouts.master')

@section('content')
  @if(!$currentUser)
   <div class="row">
       <div class="col-sm-6 col-md-6 col-md-offset-3">
           <div class="register well">
              <h3>It's like a mini website for your local shop!</h3>
               <h3>Just register your shop and we'll takecare of your mini website</h3><br>
               <a href="{{URL::route('register_path')}}"> <button type="button" class="btn btn-success btn-lg btn-block">Create website</button></a>
           </div>

       </div>
   </div>
   @endif
    <br><br>
    <div class="row">

        <div class="col-xm-6 col-md-2">
            <div class="thumbnail">
            <a  href="{{ route('electronics') }}"><h4 class="profile-edit">Electronics</h4>
           <img src="{{ asset('images/68792.png') }}" alt="getdukaan.com"></a>
                </div>
        </div>
        <div class="col-xm-6 col-md-2">
            <div class="thumbnail">
             <a  href="{{ route('hostel_pg') }}"><h4 class="profile-edit">Hostel & P.G.</h4>
             <img src="{{ asset('images/23665.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>

        <div class="col-xm-6 col-md-2">
            <div class="thumbnail">
             <a  href="{{ route('departmentalstore') }}"><h4 class="profile-edit">Departmental store</h4>
             <img src="{{ asset('images/images.jpg') }}" alt="getdukaan.com"></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
             <a  href="{{ route('clothsshoes') }}"><h4 class="profile-edit">Cloths & shoes</h4>
             <img src="{{ asset('images/44255.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
             <a  href="{{ route('services') }}"><h4 class="profile-edit">Services</h4>
             <img src="{{ asset('images/70760.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <a  href="{{ route('food_plaza') }}"> <h4 class="profile-edit">Food Plaza</h4>
                    <img src="{{ asset('images/46812.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
    </div>
    <div class="row">


        <div class="col-md-2">
            <div class="thumbnail">
             <a  href="{{ route('giftshop') }}"><h4 class="profile-edit">Gift shop</h4>
             <img src="{{ asset('images/11181.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>

        <div class="col-md-2">
            <div class="thumbnail">
            <a  href="{{ route('buildingsupplies') }}"><h4 class="profile-edit">Building Supplies</h4>
            <img src="{{ asset('images/24914.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>

        <div class="col-md-2">
            <div class="thumbnail">
            <a  href="{{ route('electrical') }}"><h4 class="profile-edit">Electrical</h4>
            <img src="{{ asset('images/64472.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
                <a  href="{{ route('fashion') }}"> <h4 class="profile-edit">Fashion</h4>
               <img src="{{ asset('images/68822.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail">
            <a  href="{{ route('accessories') }}"><h4 class="profile-edit">Accessories</h4>
            <img src="{{ asset('images/27152.png') }}" alt="getdukaan.com"></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
            {{link_to_route('users_path_profile', 'More....')}}
            </div>
        </div>
    </div>

@stop

@section('users')
<br><br>
  <h1 class="center">Latest shops added</h1>

  @foreach(array_chunk($profiles->all(), 3) as $row)
 
      
            <div class="row">
           @foreach($row as $profile)
                
                  <div class="col-md-4">
                        <a href="{{ route('profile', $profile->user->username) }}">
                        <h3 class="profile-edit">{{ $profile->storename }}</h3>
                    </a>
                      <div class="thumbnail">
                        <a href="{{ route('profile', $profile->user->username) }}">
                          @if(count($profile->image))
                            <img src="{{ $profile->image }}" alt="{{ $profile->title }}" class="img-rounded"></img>
                          @else
                                <img src="{{ asset('images/front.png') }}" alt="{{ $profile->title }}" class="img-rounded">
                            @endif
                        </a>
                        @include('users.form.favorte')
                        @include('users.main.likeall')
                          @if(count($profile->views))
                           <div class="viewsss">
                            <i class="fa fa-eye"> {{ $profile->views }}</i>
                           </div>
                          @endif
                      </div>
          </div>

               @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        {{link_to_route('users_path_profile', 'More....')}}
                    </div>
                </div>
             </div>
  @endforeach


@stop

@section('share')

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-550c70de573ab311" async="async"></script>

@stop