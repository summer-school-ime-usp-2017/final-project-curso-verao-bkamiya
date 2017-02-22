@extends('layouts.master')

@section('title', 'Inscrições')

@section('page-header-content', 'Inscrições')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/incricoes/cria">
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
            <th>Nome</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($incricoes as $inscricao)
          <tr>
            <td>{{ $inscricao->id }}</td>
            <td>{{ $inscricao->nome }}</td>
            <td>{{ $inscricao->email }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
