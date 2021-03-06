<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscricao;
use App\Aluno;
use App\Turma;

class InscricaoController extends Controller
{
    //
    public function index()
    {
      $inscricoes = Inscricao::all();
      return view('inscricao.index', compact('inscricoes'));
    }

    public function cria()
    {
      $alunos = Aluno::all();
      $turmas = Turma::all();
      return view('inscricao.cria', compact('alunos', 'turmas'));
    }

    public function armazena()
    {
      Inscricao::create(request()->all());
      return redirect('/inscricoes');
    }
}
