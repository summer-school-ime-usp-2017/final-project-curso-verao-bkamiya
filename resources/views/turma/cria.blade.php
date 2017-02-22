@extends('layouts.master')

@section('title', 'Cadastro de turma')

@section('page-header-content', 'Cadastro de turma')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Turmas</h3>
        </div>
        <div class="panel-body">
          <a href="/turmas">
            <span class="glyphicon glyphicon-th-list"> Turmas</span>
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
      <form action="/turmas" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
             <label for="curso_id">Curso</label>
             <select name="curso_id" id="curso_id" type="text" class="form-control">
               <option value=""></option>
               @foreach ($cursos as $curso)
               <option value="{{$curso->id}}">{{$curso->nome}}</option>
               @endforeach
             </select>
        </div>
        <div class="form-group">
          <label for="periodo">Período</label>
          <input type="text" class="form-control" name="periodo" id="periodo" />
        </div>
        <div class="form-group">
             <label for="professor_id">Professor</label>
             <select name="professor_id" id="professor_id" type="text" class="form-control">
               <option value=""></option>
               @foreach ($professores as $professor)
               <option value="{{$professor->id}}">{{$professor->nome}}</option>
               @endforeach
             </select>
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>

@endsection
