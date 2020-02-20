<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome', 'local_trabalho', 'data_nascimento', 'telefone', 'email'
    ];
}
