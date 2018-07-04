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

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
// Authentication routes...
Route::get('login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
// Registration routes...
Route::get('register', ['as' =>'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', ['as' =>'register', 'uses' => 'Auth\AuthController@postRegister']);
// Password reset link request routes...
Route::get('forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('forgot', ['as' =>'password/email', 'uses' => 'Auth\PasswordController@postEmail']);
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

