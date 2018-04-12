<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bia', function() {
	return view('my_views.bia');
});

Route::get('/hello/{nammme}/{a123}', 'UserController@sayHello');

////////////////////////////////////////////////////////////////////////////////////////////

Route::group(['middleware' => 'auth'], function() {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'Auth\UserController@profile')->name('profile');
Route::post('/profile', 'Auth\UserController@updateProfile')->name('updateProfile');

Route::get('eventos/index/{filter}', 'EventosController@index')->name('indexEvent');
Route::get('eventos/create', 'EventosController@create')->name('createEvent');
Route::post('eventos/store', 'EventosController@store')->name('storeEvent');
Route::get('eventos/show/{id}', 'EventosController@show')->name('showEvent');
Route::get('eventos/edit/{id}', 'EventosController@edit')->name('editEvent');
Route::post('eventos/update/{id}', 'EventosController@update')->name('updateEvent');
Route::get('eventos/destroy/{id}', 'EventosController@destroy')->name('destroyEvent');
Route::get('event/index/{filter?}', ['as' => 'indexEvent', 
                                     'uses' => 'EventController@index']);

});
 
