<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::resource('/Pregunta','PreguntaController');
    Route::resource('/Respuesta','RespuestaController',['except'=>['create','edit']]);
    Route::get('/Respuesta/{id}/create','RespuestaController@create');
    Route::get('/Respuesta/{pregunta_id}/{id}/edit','RespuestaController@edit');
    Route::get('/home', 'HomeController@index');
});


//prueba vistas
Route::get('/1', function () {
    return view('pregunta.create');
});
Route::get('/4', function () {
    return view('pregunta.edit');
});

Route::get('/2', function () {
    return view('respuesta.create');
});

Route::get('/3', function () {
    return view('home');
});