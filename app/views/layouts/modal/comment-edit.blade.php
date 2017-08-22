<div id="myModale" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 class="profile-edit" style="color:white;">Edit your comment</h3>
      </div>
      <div class="modal-body">
        <div class="col-sm-10 col-sm-offset-1">

           {{ Form::model($comment ,['route' => ['comments_edit', $comment->id], 'method'=>'put']) }}

          <div class="form-group">

             {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Comment about this status.']) }}
          
          </div>
            
          <div class="form-group">
            {{ Form::submit('Edit', ['class' => 'btn btn-primary pull-left']) }}
             <button class="btn btn-danger pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button> 
          </div>
       
        </div>

    {{ Form::close() }}   
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>