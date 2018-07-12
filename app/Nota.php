<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public $timestamps = false;

    protected $fillable = ['valor_nota', 'disciplina_id', 'aluno_id'];

    public function alunos()
    {
        return $this->hasOne('App\Aluno');
    }

    
}
