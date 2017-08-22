               <h3>About Shop</h3>
	             <div class="form-group">
		          <lable for="storename">Shop Name:</lable>
		           <div class ="{{$errors->has('storename') ? 'has-error':''}}">  
		             {{ Form::text('storename', null, ['class' => 'form-control']) }}
		             {{$errors->first('storename','<span class="help-block">:message</span>')}}
                    </div>
	             </div>
	              
	             <div class="form-group">
		           <lable for="category_id">Select your Shop category:</lable>
		            <div class ="{{$errors->has('category_id') ? 'has-error':''}}">  
		             {{ Form::select('category_id', $categories, null, ['class' => 'form-control' ,'id' => 'category']) }}
		              {{$errors->first('category_id','<span class="help-block">:message</span>')}}
                    </div> 
	             </div>

	             <div class="form-group">
		          <lable for="subcategory_id">Select your Shop subcategory:</lable>
		           <div class ="{{$errors->has('subcategory_id') ? 'has-error':''}}"> 
		             {{ Form::select('subcategory_id', $subcategories, null, ['class' => 'form-control' ,'id' => 'subcategory']) }}
			   	  	
			   	     {{$errors->first('subcategory_id','<span class="help-block">:message</span>')}}
                    </div>
		             
	             </div>
	             
	             <div class="form-group">
		             <lable for="timing">Timing:</lable>
		             <div class ="{{$errors->has('timing') ? 'has-error':''}}"> 
		              {{ Form::text('timing', null, ['class' => 'form-control']) }}
		              {{$errors->first('timing','<span class="help-block">:message</span>')}}
                    </div>
	             </div>

	             <div class="form-group">
		             <lable for="weekend">Weekend holiday:</lable>
		            <div class ="{{$errors->has('weekend') ? 'has-error':''}}"> 
		              {{ Form::text('weekend', null, ['class' => 'form-control']) }}
		            {{$errors->first('weekend','<span class="help-block">:message</span>')}}
                    </div>  
	             </div>

	             <div class="form-group">
		             <lable for="about">About your Shop:</lable>
		            <div class ="{{$errors->has('about') ? 'has-error':''}}">  
		              {{ Form::textarea('about', null,['class' => 'form-control', 'rows' => 7, 'placeholder' =>'Say something about shop.']) }}
		             {{$errors->first('about','<span class="help-block">:message</span>')}}
                    </div>  
	             </div>

	             
