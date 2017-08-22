<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class UploadImageForm extends FormValidator
{
    protected $rules = [
    
         'file'        => 'required|image',
         'title'       => 'required',
         'description' => 'required|min:10',
         'status'      => 'required',
         'offer'      => 'max:50'

    ];
}