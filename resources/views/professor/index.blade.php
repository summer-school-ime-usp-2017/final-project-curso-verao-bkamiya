@extends('layouts.master')

@section('title', 'Professores')

@section('page-header-content', 'Professores')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/professores/cria">
            <span class="glyphicon glyphicon-plus"></span> Professores
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
          @foreach($professores as $professor)
          <tr>
            <td>{{ $professor->id }}</td>
            <td>{{ $professor->nome }}</td>
            <td>{{ $professor->email }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
