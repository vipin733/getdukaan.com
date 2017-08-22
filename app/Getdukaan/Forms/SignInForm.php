<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator
{
    protected $rules = [

         'email'       => 'required',
         'password'    => 'required'

    ];
}