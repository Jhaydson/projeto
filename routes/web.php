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
    return view('index');
});

Route::get('/turma', 'ControladorTurmas@index');
Route::get('/turma/novo', 'ControladorTurmas@create');
Route::post('/turma', 'ControladorTurmas@store');
Route::get('/turma/apagar/{id}', 'ControladorTurmas@destroy');
Route::get('/turma/editar/{id}', 'ControladorTurmas@edit');
Route::post('/turma/{id}', 'ControladorTurmas@update');


///professores
Route::get('/professor', 'ControladorProfessor@index');
Route::get('/professor/novo', 'ControladorProfessor@create');

