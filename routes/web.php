<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return "Bienvenido a la pagina principal";
});
Route::get('cursos', function () {
    return "Bienvenido a la pagina de cursos";
});
Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});
/*Route::get('cursos/{curso}',function($curso){
    return "Bienvenido al curso de $curso";
});*/
Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria = null) { //poniendo el signo ? al final de categoria indicamos que es un valor opcional ya que si no se llegara a pasar un valor a categoria este se declara como null
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }
});
