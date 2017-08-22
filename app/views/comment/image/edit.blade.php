
@extends('layouts.master')

@section('content')
<div class="row">
 <div class="col-md-6 col-md-offset-3">
{{ Form::model($comment ,['route' => ['comments_image_update_path', $comment->id], 'method'=>'put']) }}

          @include('comment.profile.edit-form')
    </div>
</div>
@stop
