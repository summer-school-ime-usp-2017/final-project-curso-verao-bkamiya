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

    public function edita($id)
    {
      $aluno = Aluno::find($id);
      return view('aluno.edita', compact('aluno'));
      $aluno->save();
    }

    public function atualiza($id)
    {
       $aluno->fill(request()->all());
       $aluno->save();
    } 

    public function show(Aluno $aluno)
    {
     return view('aluno.show', compact('aluno'));
    }

}
