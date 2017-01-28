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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return redirect(route('instrucaoInicials.index'));
    });

    Route::get('/home', function (){
        return redirect(route('instrucaoInicials.index'));
    });

    Route::resource('instrucaoInicials', 'InstrucaoInicialController');
    Route::resource('mensagems', 'MensagemController');
    Route::resource('perguntas', 'PerguntaController');
    Route::resource('cartas', 'CartaController');
    Route::resource('tempos', 'TempoController');
    Route::resource('visorPontuacaos', 'VisorPontuacaoController');
    Route::resource('fases', 'FaseController');
    Route::resource('regraExtras', 'RegraExtraController');
    Route::resource('modelos', 'ModeloController');
    Route::get('/usuarios', ['as' => 'usuarios.index', 'uses' => 'UsuarioController@index']);
});