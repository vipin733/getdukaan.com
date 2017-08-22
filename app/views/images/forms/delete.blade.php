   

   {{Form::open(['route' => ['delete-images_path', $image->id , 'class' => 'delete'], 'method' => 'delete']) }}

   <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModald">
       <span class="glyphicon glyphicon-trash"></span>
   </button>
   <div class="modal fade" id="myModald" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title profile-edit" style="color:white;">Delete Product Image</h4>
               </div>
               <div class="modal-body">
                <h3>Are you sure want to delete this product image?</h3>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                   <button type="submit" class="btn btn-danger">Delete</button>
               </div>
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div>
    {{ Form::close() }}