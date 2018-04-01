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

Route::get('/bia', function() {
	return view('my_views.bia');
});

Route::get('/hello/{nammme}/{a123}', 'UserController@sayHello');

Route::get('/eventos/', function()
{
    $eventos = Eventos::get();
    return View::make('eventos', compact('eventos'));
});
 
// Criar um novo evento
Route::get('/eventos/inserir', function()
{
    return View::make('eventos_inserir');
});

Route::post('/eventos/inserir', function()
{
    $eventos = new Eventos();
 
    $eventos->titulo   = Input::get('titulo');
    $eventos->conteudo = Input::get('conteudo');
 
    $eventos->save();
 
    return Redirect::to('/eventos/');
});