@extends('layouts.master')

@section('title', 'Cursos')

@section('page-header-content', 'Cursos')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/cursos/cria">
            <span class="glyphicon glyphicon-plus"></span> Cursos
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Carga Horária</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alunos as $aluno)
          <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nome }}</td>
            <td>{{ $curso->descricao }}</td>
            <td>{{ $curso->cargaHoraria }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
