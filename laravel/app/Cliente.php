<?php

namespace CodeProject;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $filltable = [
        'nome',
        'responsavel',
        'email',
        'phone',
        'endereco',
        'obs'
    ];
}
