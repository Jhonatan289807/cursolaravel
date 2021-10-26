<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso){
        //compact('curso'); se utiliza cuando se envia una variable que su nombre coincide con el nombre de la variable donde se recibe, por lo que, esto puede ser lo mismo que utlizar ['curso' => $curso]
        return view("cursos.show",['curso' => $curso]);
    }
}
