@extends('layouts.master')

@section('title', 'Cadastro de curso')

@section('page-header-content', 'Cadastro de curso')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/cursos">
            <span class="glyphicon glyphicon-th-list"> Cursos</span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $message)
              <li>{{ $message }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/cursos" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome" />
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" name="descricao" id="descricao" />
        </div>
        <div class="form-group">
          <label for="cargaHoraria">Carga Horária</label>
          <input type="text" class="form-control" name="cargaHoraria" id="cargaHoraria" />
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>

@endsection
