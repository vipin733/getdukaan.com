<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class ProfileStatusForm extends FormValidator
{
    protected $rules = [
       
        'status' => 'required'
    ];
}