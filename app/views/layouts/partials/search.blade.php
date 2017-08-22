

{{ Form::open(['method' => 'GET']) }}

{{ Form::input('search','q',null,['class'=>'form-control input-lg' ,'placeholder'=>'pincode, district, city, location']) }}

{{Form::close()}}