@extends('layouts.master')

@section('title', 'Edição de Aluno')

@section('cabecalho', 'Edição de Alunos')

@section('content')

  <div class="row">
      <div class="col-md-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Ações</h3>
          </div>
          <div class="panel-body">
            <a href="/alunos">
              <span class="glyphicon glyphicon-th-list"></span> Alunos
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="/alunos/{{ $aluno->id }}" method="PUT">

      {{csrf_field()}}

          <div class="form-group">
            <label for="nome">Nome</label>
            <input value = {{ $aluno->nome }} name="nome" id="nome" type="text" class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input value = {{ $aluno->email }} name="email" id="email" type="text" class="form-control">
          </div>
          <button class="btn btn-primary">Editar</button>
        </form>
      </div>
    </div>


@endsection
