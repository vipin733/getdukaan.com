<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class EditImageForm extends FormValidator
{
    protected $rules = [
         'file'        => 'image',
         'title'       => 'required',
         'description' => 'required|min:10',
         'status'      => 'required',
          'offer'      => 'max:50'

    ];
}