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

//Página principal
Route::get('/princhipal', 'Principal\PrincipalController@index');

//Lista de Materias
Route::get('/materias', 'Principal\PrincipalController@listadoMaterias');

//Lista de lista de Alumnos
Route::get('/alumnos', 'Principal\PrincipalController@listadoAlumnos');
