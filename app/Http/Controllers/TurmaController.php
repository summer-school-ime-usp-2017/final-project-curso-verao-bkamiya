<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Curso;
use App\Professor;

class TurmaController extends Controller
{
    //
    public function index()
    {
      $turmas = Turma::all();
      return view('turma.index', compact('turmas'));
    }

    public function cria()
    {
      return view('turma.cria');
    }

    public function armazena()
    {
      $this->validate(request(), [
         'periodo' => 'required|min:2|max:255'
       ]);
      Turma::create(request()->all());
      return redirect('/turmas');
    }
}
