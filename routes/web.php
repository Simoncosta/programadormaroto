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
Route::get('{id}/noticia', 'NewsController@show')->name('noticia.show');
Route::resource('/', 'NewsController');

Route::get('/cursos/marketingdigital',function () {
    return view('cursos.marketingdigital');
});

Route::get('/cursos/programacao',function () {
    return view('cursos.programacao');
});

Route::get('/cursos/ticursos',function () {
    return view('cursos.ticursos');
});

Route::get('/contato','Emails\ContatoController@index')->name('contato.index');
Route::post('/contato/form','Emails\ContatoController@enviar_email')->name('contato.enviar_email');
