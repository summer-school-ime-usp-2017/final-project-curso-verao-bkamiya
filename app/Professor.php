<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    //
    protect $table = 'professores';

    protected $fillable = [
      'nome', 'email'
    ];
}
