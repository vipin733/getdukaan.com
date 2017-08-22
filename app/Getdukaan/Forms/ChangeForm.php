<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class ChangeForm extends FormValidator
{
    protected $rules = [

         'old_password'                        => 'required',
         'password'                            => 'required|min:5|confirmed'
    ];
}