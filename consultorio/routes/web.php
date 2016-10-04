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
    return view('welcome');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/calendario', function () {
	return view('cstr-su.home');
});

Route::get('/paciente_nuevo', function () {
	return view('cstr-su.new_patient');
});

Route::get('/restricciones', function () {
	return view('cstr-su.restrictions');
});

Route::get('/organos', function () {
	return view('cstr-su.organ');
});

Route::get('/inventario', function () {
	return view('cstr-su.inventory');
});
