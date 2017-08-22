               <h3 class="profile-edit">Shop Address</h3>
                 
	            <div class="form-group">

		             <lable for="country">Country:</lable>
		           <div class ="{{$errors->has('country') ? 'has-error':''}}"> 
		             {{ Form::text('country', null, ['class' => 'form-control']) }}
                   {{$errors->first('country','<span class="help-block">:message</span>')}}
                  </div>
	             </div>


				           
	             <div class="form-group">

		           <lable for="state">State:</lable>
                    <div class ="{{$errors->has('state') ? 'has-error':''}}"> 
		             {{ Form::text('state', null, ['class' => 'form-control']) }}
                    {{$errors->first('state','<span class="help-block">:message</span>')}}
                  </div>
	             </div>
			  

	             <div class="form-group">

		             <lable for="district">District:</lable>
		            <div class ="{{$errors->has('district') ? 'has-error':''}}"> 
		              {{ Form::text('district', null, ['class' => 'form-control']) }}
		             {{$errors->first('district','<span class="help-block">:message</span>')}}
                     </div>

	             </div>

                 <div class="form-group">

		             <lable for="city">City:</lable>
		            <div class ="{{$errors->has('city') ? 'has-error':''}}">  
		             {{ Form::text('city', null, ['class' => 'form-control']) }}
                    {{$errors->first('city','<span class="help-block">:message</span>')}}
                     </div>
	             </div>

	             <div class="form-group">

		             <lable for="zipcode">Zipcode/Pincode:</lable>
		            <div class ="{{$errors->has('zipcode') ? 'has-error':''}}">  
		             {{ Form::text('zipcode', null, ['class' => 'form-control']) }}
                    {{$errors->first('zipcode','<span class="help-block">:message</span>')}}
                     </div>
	             </div>

	             <div class="form-group">
                  
		             <lable for="location">Exact location in city:</lable>
		            <div class ="{{$errors->has('location') ? 'has-error':''}}">  
		             {{ Form::text('location', null, ['class' => 'form-control']) }}
                      {{$errors->first('location','<span class="help-block">:message</span>')}}
                     </div>
	             </div>

	             <div class="form-group">

		             <lable for="website">Have you website?:</lable>
		            <div class ="{{$errors->has('website') ? 'has-error':''}}"> 
		             {{ Form::text('website', null, ['class' => 'form-control' , 'placeholder' =>'http://www.example.com']) }}
		            {{$errors->first('website','<span class="help-block">:message</span>')}}
                     </div> 

	             </div>
