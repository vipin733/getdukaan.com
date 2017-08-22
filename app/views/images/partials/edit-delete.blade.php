                              <div class="edit-delete">
                                <div class="pull-right">
                                {{ link_to_route('edit-images_path', 'Edit',$image->id,['class' => 'btn btn-primary btn-xs' ]) }}
                                </div>
                                <div class="pull-left">
                                  @include('images.forms.delete')
                                 </div>
                              </div>