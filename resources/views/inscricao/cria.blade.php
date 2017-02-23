@extends('layouts.master')

@section('title', 'Cadastro de inscrições')

@section('page-header-content', 'Cadastro de inscrições')

@section('content')

<div class="row">
  <div class="col-md-3">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Inscrições</h3>
      </div>
      <div class="panel-body">
        <a href="/inscricoes">
          <span class="glyphicon glyphicon-th-list"> Inscrições</span>
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
    <form action="/inscricoes" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
           <label for="aluno_id">Aluno</label>
           <select name="aluno_id" id="aluno_id" type="text" class="form-control">
             <option value=""></option>
             @foreach ($alunos as $aluno)
             <option value="{{$aluno->id}}">{{$aluno->nome}}</option>
             @endforeach
           </select>
      </div>
      <div class="form-group">
           <label for="turma_id">Turma</label>
           <select name="turma_id" id="turma_id" type="text" class="form-control">
             <option value=""></option>
             @foreach ($turmas as $turma)
             <option value="{{$turma->id}}">{{$turma->id}}</option>
             @endforeach
           </select>
      </div>
      <button class="btn btn-primary">Salvar</button>
    </form>
  </div>
</div>

@endsection
