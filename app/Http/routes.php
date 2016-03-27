<?php

// Esto para la autentificacion, lo habilitare despues

Route::get('/',[ 
	'uses' =>'Auth\AuthController@getLogin',
	'as' =>'login']);
Route::get('/login',[ 
	'uses' =>'Auth\AuthController@getLogin',
	'as' =>'login']);
Route::post('/',[ 
	'uses' =>'Auth\AuthController@postLogin',
	'as' =>'login']);
Route::post('/login',[ 
	'uses' =>'Auth\AuthController@postLogin',
	'as' =>'login']);
Route::get('/logout',[ 
	'uses' =>'Auth\AuthController@logout',
	'as' =>'logout']);



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::resource('casos','CasosController');
	Route::get('casosinactivos',[
			'uses' => 'CasosController@casosinactivos',
			'as' => 'admin.casos.inactivos'
		]);
		Route::get('todos',[
			'uses' => 'CasosController@casostodos',
			'as' => 'admin.casos.todos'
		]);
	Route::get('casos/{id}/destroy',[
			'uses' => 'CasosController@destroy',
			'as' => 'admin.casos.destroy'
		]);
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});
*/
