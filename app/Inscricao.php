<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    //

      public function aluno()
      {
       return $this->belongsTo(Aluno::class);
      }

     public function turma()
     {
      return $this->belongsTo(Turma::class);
     }

    protected $table = 'inscricoes';

    protected $fillable = [
      'aluno_id', 'turma_id'
    ];
}
