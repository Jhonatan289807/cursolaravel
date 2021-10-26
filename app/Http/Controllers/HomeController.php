<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //la funcion invoke se utiliza para llamar una sola pagina
        return "Bienvenido a la pagina principal";
    }
}
