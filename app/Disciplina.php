<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    public $timestamps = false;

    protected $fillable = [ 'nome' ];

    public function notas()
    {
        return $this->hasMany('App\Nota');
    }

    
}
