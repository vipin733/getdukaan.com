<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class ContactForm extends FormValidator
{
    protected $rules = [

         'name'        => 'required',
         'subject'     => 'required',
         'email'       => 'required|email',
         'text'        => 'required|max:1000',
'g-recaptcha-response' => 'required|captcha'

    ];
}