                         <div class="like pull-right">
			                   @include('users.form.like')
			               </div>
			                  

			                  
			                  <ul class="list-inline text-muted">
			                 @if(Auth::check())
			                  <div class="countt"> 
			                   @if(count($profile->likes))
			                    <li>{{count($profile->likes)}} Likes</li>
			                    @else
			                    <li> No Likes</li>
			                   @endif

			                  </div> 
			                 @else
			                 <div class="pull-right">
			                    @include('users.form.dislike')
			                  </div>
			                  
			                    @if(count($profile->likes))
			                   <li>{{count($profile->likes)}} Likes</li>
			                   @else
			                    <li> No Likes</li>
			                   @endif
			                  
			                 @endif 
			                 