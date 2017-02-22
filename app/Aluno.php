<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    public function inscricoes()
    {
      return $this->hasMany(Inscricao::class);
    }

    protected $fillable = [
      'nome', 'email'
    ];
}
