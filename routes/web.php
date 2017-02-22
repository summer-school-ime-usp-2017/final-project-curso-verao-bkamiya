<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos', 'AlunoController@index');

Route::get('/alunos/cria', 'AlunoController@cria');

Route::post('/alunos', 'AlunoController@armazena');

Route::get('/cursos', 'CursoController@index');

Route::get('/cursos/cria', 'CursoController@cria');

Route::post('/cursos', 'CursoController@armazena');

Route::get('/inscricoes', 'InscricaoController@index');

Route::get('/inscricoes/cria', 'InscricaoController@cria');

Route::post('/inscricoes', 'InscricaoController@armazena');

Route::get('/professores', 'ProfessorController@index');

Route::get('/professores/cria', 'ProfessorController@cria');

Route::post('/professores', 'ProfessorController@armazena');

Route::get('/turmas', 'TurmaController@index');

Route::get('/turmas/cria', 'TurmaController@cria');

Route::post('/turmas', 'TurmaController@armazena');
