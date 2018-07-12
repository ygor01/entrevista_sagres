<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;

    protected $fillable = ['nome', 'matricula', 'endereco', 'bairro', 'cep', 'cidade', 'uf', 'email', 'data' ];

    
}
