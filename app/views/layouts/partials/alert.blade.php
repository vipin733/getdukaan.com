@if(Session::has('global'))
<div class="alert alert-{{ Session::get('type') }}">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<p></p>{{ Session::get('global') }}</p>
</div>
@endif