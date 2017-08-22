
{{Form::open(['route' => ['comments_delete_get', $comment->id], 'method' => 'delete']) }}
   <button type="button" class="btn-naked" data-toggle="modal" data-target="#mycommentModald"><i class="fa fa-lg fa-trash-o"></i></button>
</button>
<div class="modal fade" id="mycommentModald" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title profile-edit" style="color:white;">Delete Your Comment</h4>
            </div>
            <div class="modal-body">
                <h3>Are you sure want to delete this comment?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
 {{ Form::close() }}