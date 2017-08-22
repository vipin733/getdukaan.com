              <div class="form-group">
                 <lable for = "file">Select an image file:</lable>
                <div class ="{{$errors->has('file') ? 'has-error':''}}"> 
                  {{ Form::file('file')}}
                  {{$errors->first('file','<span class="help-block">:message</span>')}}
                </div>
              </div>
              <div class="form-group">
	             <lable for="title" class="control-label">Name of the item:</lable>
                <div class ="{{$errors->has('title') ? 'has-error':''}}">
	               {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Type name of this item.']) }}
              
                 {{$errors->first('title','<span class="help-block">:message</span>')}}
                </div>
              </div>


             <div class="form-group">
	             <lable for="description" class="control-label">About this item:</lable>
               <div class ="{{$errors->has('description') ? 'has-error':''}}">
	              {{ Form::textarea('description', null,['class' => 'form-control', 'rows' => 3, 'placeholder' =>'Type description about it.']) }}
               
                {{$errors->first('description','<span class="help-block">:message</span>')}}
               </div>
             </div>

              <div class="form-group">
	             <lable for="status" class="control-label">Availability:</lable>
                <div class ="{{$errors->has('status') ? 'has-error':''}}">
	               {{Form::select('status',['Yes' => 'Yes', 'No' => 'No'],null,['class' => 'form-control'])}}
               
                 {{$errors->first('status','<span class="help-block">:message</span>')}}
                </div>
             </div>

              <div class="form-group">
               <lable for="offer" class="control-label">Any offer on this item?:</lable>
               <div class ="{{$errors->has('offer') ? 'has-error':''}}">
                 {{ Form::text('offer', null, ['class' => 'form-control', 'placeholder' => 'Any offer on this item?']) }}
               
                 {{$errors->first('offer','<span class="help-block">:message</span>')}}
                </div>
              </div>