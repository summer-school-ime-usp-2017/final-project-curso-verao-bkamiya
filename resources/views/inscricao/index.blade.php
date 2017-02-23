@extends('layouts.master')

@section('title', 'Cadastro de inscrições')

@section('page-header-content', 'Cadastro de inscrições')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Ações</h3>
      </div>
      <div class="panel-body">
        <a href="/inscricoes/cria">
          <span class="glyphicon glyphicon-plus"></span> Inscrições
        </a>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Aluno</th>
          <th>Turma</th>
        </tr>
      </thead>
      <tbody>
        @foreach($inscricoes as $inscricao)
        <tr>
          <td>{{ $inscricao->id }}</td>
          <td>{{ $inscricao->aluno->nome }}</td>
          <td>{{ $inscricao->turma->id }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
