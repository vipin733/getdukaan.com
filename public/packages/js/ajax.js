 



 //$('.comments__create-form').on('keydown', function(e){      //submit comment

		//if (e.keyCode == 13) 
		//{
            //e.preventDefault();
            //$(this).submit();
		//}
	//});

 
 

$('#category').change(function()
{
    $.get('/categories/' + this.value + '/subcategory.json', function(states)
    {
        var $subcategory = $('#subcategory');

        $subcategory.find('option').remove().end();

        $.each(states, function(index, subcategory) {
            $subcategory.append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
        });
    });
});


$('#state').change(function()
{
    $.get('/states/' + this.value + '/districs.json', function(states)
    {
        var $district = $('#district');

        $district.find('option').remove().end();

        $.each(states, function(index, districts) {
            $district.append('<option value="' + districts.id + '">' + districts.name + '</option>');
        });
    });
});

$('#district').change(function()
{
    $.get('/districs/' + this.value + '/cities.json', function(states)
    {
        var $city = $('#city');

        $city.find('option').remove().end();

        $.each(states, function(index, cities) {
            $city.append('<option value="' + cities.id + '">' + cities.name + '</option>');
        });
    });
});

$('#city').change(function()
{
    $.get('/cities/' + this.value + '/blocks.json', function(states)
    {
        var $block = $('#block');

        $block.find('option').remove().end();

        $.each(states, function(index, blocks) {
            $block.append('<option value="' + blocks.id + '">' + blocks.name + '</option>');
        });
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


