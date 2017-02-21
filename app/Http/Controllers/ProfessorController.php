<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
    //
    public function index()
    {
      $professores = Professor::all();
      return view('professor.index', compact('professores'));
    }

    public function cria()
    {
      return view('professor.cria');
    }

    public function armazena()
    {
      $this->validate(request(), [
         'nome' => 'required|min:2|max:255',
         'email' => 'required|email'
       ]);
      Professor::create(request()->all());
      return redirect('/professores');
    }
}
