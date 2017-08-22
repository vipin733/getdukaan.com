<?php namespace Getdukaan\Forms;

use Laracasts\Validation\FormValidator;

class RegistrationForm extends FormValidator
{
    protected $rules = [

         'username'             => 'required|alpha_dash|min:5|unique:users',
         'name'                 => 'required',
         'email'                => 'required|email|unique:users',
         'password'             => 'required|min:5|confirmed',
         'role_id'              => 'required',
         'g-recaptcha-response' => 'required|captcha'


    ];

   
}