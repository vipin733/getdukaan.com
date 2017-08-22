<div id="myModalfeedback" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="profile-edit" style="color:white;">Feedback</h3>
            </div>
            <div class="modal-body">

                {{ Form::open(['route' => 'post_feedback','class' => 'form-horizontal']) }}
                <div class="col-sm-10 col-sm-offset-1">

                    <div class="form-group {{$errors->has('name') ? 'has-error':''}}">

                        {{ Form::text('name', null ,['class'=>'form-control' ,'required',  'placeholder' => 'Enter your fullname']) }}
                        {{$errors->first('name','<span class="help-block">:message</span>')}}

                    </div>

                    <div class="form-group {{$errors->has('text') ? 'has-error':''}}">

                        {{ Form::textarea('text', null ,['class'=>'form-control' ,'required','rows' => 6,'placeholder' => 'Say what you want with us...']) }}
                        {{$errors->first('text','<span class="help-block">:message</span>')}}

                    </div>

                    <div class="form-group">
                        {{ Form::submit('Send!', ['class' => 'btn btn-primary pull-left']) }}
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