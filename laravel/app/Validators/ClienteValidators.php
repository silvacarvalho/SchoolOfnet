<?php

namespace CodeProject\Validators;

use \Prettus\Validator\LaravelValidator;

/**
 * Description of ClienteValidators
 *
 * @author EU
 */
class ClienteValidators extends LaravelValidator {

    protected $rules = [
        'nome'          => 'required|max:255',
        'responsavel'   => 'required|max:255',
        'email'         => 'required|email',
        'phone'         => 'required',
        'endereco'      => 'required'
    ];

}
