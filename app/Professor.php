<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //
    protected $table = 'professores';

    public function turmas()
    {
      return $this->hasMany(Turma::class);
    }

    protected $fillable = [
      'nome', 'email'
    ];
}
