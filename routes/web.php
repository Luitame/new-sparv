<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('instrucaoInicials', 'InstrucaoInicialController');

Route::resource('mensagems', 'MensagemController');

Route::resource('perguntas', 'PerguntaController');

Route::resource('cartas', 'CartaController');

Route::resource('tempos', 'TempoController');

Route::resource('visorPontuacaos', 'VisorPontuacaoController');

Route::resource('fases', 'FaseController');

Route::resource('regraExtras', 'RegraExtraController');