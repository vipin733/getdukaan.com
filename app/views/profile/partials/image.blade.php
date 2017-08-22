                 
                       <div class="form-group">
                        <h3 class="profile-edit">Your front Shop image</h3>
                        @if(isset($user->profile->image) && $user->profile->image)
                        <div class="thumbnail">
                          <a href="{{ $user->profile->image }}" class="fresco" data-fresco-caption="{{ $user->profile->storename }}">
                            <img src="{{ $user->profile->image }}" alt="{{ $user->profile->storename }}">
                          </a>
                        </div>
                        @else
                        <p>You need to upload an image</p>
                       @endif
                      </div>
                 