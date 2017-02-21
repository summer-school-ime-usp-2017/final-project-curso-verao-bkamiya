<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
    public function curso()
    {
     return $this->belongsTo(Curso::class);
    }

   public function professor()
   {
    return $this->belongsTo(Professor::class);
   }
       protected $fillable = [
         'curso_id', 'periodo', 'professor_id'
       ];

}
