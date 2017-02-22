<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    //

    public function turmas()
    {
      return $this->hasMany(Turma::class);
    }

    protected $table = 'inscricoes';

    protected $fillable = [
      'aluno_id', 'turma_id'
    ];
}
