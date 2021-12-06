<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function Index(){
        return view ('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso){
        return view ('cursos.show',['curso'=> $curso]);
    }
}
