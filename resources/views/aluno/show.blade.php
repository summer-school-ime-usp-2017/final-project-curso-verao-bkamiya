@extends('layouts.master')

@section('title', 'Alunos')

@section('page-header-content', 'Alunos')

@section('content')

<div class="container">

      <div class="page-header">
        <h1>Detalhes do aluno</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">

            <div class="panel-heading"><strong>Aluno</strong></div>

            <ul class="list-group">
              <li class="list-group-item">{{ $aluno->nome }}</li>
              <li class="list-group-item">{{ $aluno->email }}</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

@endsection
