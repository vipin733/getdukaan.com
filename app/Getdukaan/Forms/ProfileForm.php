<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator
{
    protected $rules = [
       
          
          'storename'      => 'required',
          'subcategory_id'    => 'required|not_in:1',
          'category_id'       => 'required|not_in:1',
          'timing'         => 'required',
          'weekend'        => 'required',
          'about'          => 'required|min:10',
          'country'        => 'required|max:15',
          'state'          => 'required|max:20',
          'district'       => 'required|max:20',
          'city'           => 'required|max:20',
          'zipcode'        => 'required|digits:6',
          'location'       => 'required|max:150',
          'website'       =>    'url',
        


    ];
}
