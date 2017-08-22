{{ Form::open(['method' => 'GET']) }}

{{ Form::select('category_id', $categories, null, ['class' => 'form-control' ,'id' => 'category']) }}

{{ Form::select('subcategory_id', $subcategories, null, ['class' => 'form-control' ,'id' => 'subcategoryy']) }}

{{ Form::submit('filter', ['class' => 'btn btn-success']) }}

{{Form::close()}}