<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
    //
    public function index()
    {
      $alunos = Aluno::all();
      return view('aluno.index', compact('alunos'));
    }

    public function cria()
    {
      return view('aluno.cria');
    }

    public function armazena()
    {
     $this->validate(request(), [
        'nome' => 'required|min:2|max:255',
        'email' => 'required|email'
      ]);
      Aluno::create(request()->all());
      return redirect('/alunos');
    }

}
