


  <footer class="site-footer">

       <div class="container">

          <div class="row">
             <div class="col-md-6">
             <h1>About us</h1>
             <p>
             GetDukaan does an amazing job of providing the information of the 
             local stores for the sake of convnience of customer.<br>
             GetDukaan also helps the owner of the local store to 
            publicize thier products to external market. 
            </p>
             </div>
             
             <div class="col-md-6">
              <div class="pull-right">
               <h1>Connect with us</h1>
               <div class="social">
               <ul>
                 <li><a href="https://www.facebook.com/getdukaan"><i class="fa fa-lg fa-facebook"></i></a></li>
                 <li><a href="https://twitter.com/@getdukaan"><i class="fa fa-lg fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                 <li><a href="https://www.youtube.com/channel/UCoixkvHln3swsds6qAaubwA"><i class="fa fa-lg fa-youtube"></i></a></li>
               </ul>
               </div>
               </div>
               
             </div>
             
          </div>

          <div class="bottom-footer">

             <div class="col-xs-6 col-md-5">
               Copyright &copy; 2015 GetDukaan.com
             </div>

             <div class=" col-xs-6col-md-7">
              <ul class="footer-nav">
                <li><a href="{{URL::route('home')}}">Home</a></li>
                <li><a href="{{URL::route('users_path_profile')}}">Browse Dukaan</a></li>
                <li><a href="" data-toggle="modal" data-target="#myModal">Contact us</a></li>
                @include('layouts.modal.contact')
                  <li><a href="" data-toggle="modal" data-target="#myModalfeedback">Feedback</a></li>
                  @include('layouts.modal.feedback')
               @if(!Auth::check())
                <li><a href="{{URL::route('login_path')}}">Login</a></li>
                <li><a href="{{URL::route('register_path')}}">Register</a></li>
               @endif
              </ul>
             </div>

          </div>

         <div class="row">
          
            <div class=" col-xs-6 col-md-6 col-md-offset-3">
              <ul class="privacy">
                <li><a href="{{URL::route('privacy_path')}}">Privacy Policy</a></li>
                <li><a href="{{URL::route('terms_path')}}">Terms of Use</a></li>
              </ul>
            </div>

           
           
          </div>

       </div>

  </footer>

