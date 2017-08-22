<div class="form-group">

             {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 10, 'placeholder' => 'Comment about this status.']) }}
          
          </div>
            
          <div class="form-group">
            {{ Form::submit('Edit', ['class' => 'btn btn-primary pull-left']) }}
          </div>
    

    {{ Form::close() }}