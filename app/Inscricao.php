<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    //
    protect $table = 'inscricoes';

    protected $fillable = [
      'aluno_id', 'turma_id'
    ];
}
