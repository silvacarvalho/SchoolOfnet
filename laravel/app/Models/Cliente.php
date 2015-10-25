<?php

namespace CodeProject\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'responsavel',
        'email',
        'phone',
        'endereco',
        'obs'
    ];
}
