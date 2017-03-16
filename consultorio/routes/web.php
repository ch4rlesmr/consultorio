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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/login', function () {
	return view('login');
});*/

Route::group(['middleware' => 'web'], function () {
    //Route::auth();

    Route::get("/",function(){
        return redirect()->guest('login');
    });

	Route::get('/logout', function () {
		Auth::logout();
		return redirect()->guest('login');
	});
});

Route::group(['prefix' => 'dra', 'middleware' => ['web', 'auth']], function () {
	
	

	/*Route::get('/paciente_nuevo', function () {
		return view('cstr-su.new_patient');
	})->name('dra.paciente_nuevo');*/

	Route::get('/{meetingId}/nuevo_seguimiento', 
		['uses' => 'MeetingController@createTracingMeeting', 
		'as' => 'cita.seguimiento']);

	Route::get('/{patientId}/{meetingId}/guardar_seguimiento', 
		['uses' => 'MeetingController@storeTracingMeeting', 
		'as' => 'cita.guardar_seguimiento']);

	Route::get('/{meetingId}/nuevo_tratamiento', 
		['uses' => 'MeetingController@createTreatment', 
		'as' => 'cita.tratamiento']);

	Route::POST('/{patientId}/{meetingId}/guardar_tratamiento', 
		['uses' => 'MeetingController@storeTreatment', 
		'as' => 'cita.guardar_tratamiento']);

	Route::get('/citas', ['uses' => 'MeetingController@index']);
	Route::get('/list', ['uses' => 'MeetingController@listEvents']);
	Route::get('/calendario', ['uses' => 'MeetingController@listMeetings', 'as' => 'agenda.calendario']);
	Route::POST('/buscar_cita_paciente', ['uses' => 'MeetingController@searchPatients', "as" => 'agenda.searchPatients']);

	Route::resource('paciente', 'PatientController');
	Route::resource('inventario', 'ProductController');
	Route::resource('agenda', 'MeetingController');

	Route::get('dra/inventario/exportProductsToExcel',[
        'uses'=>'ProductController@exportProductsToExcel',
        'as'=>'dra.inventario.exportProductsToExcel']);

	Route::get('/restricciones', function () {
		return view('cstr-su.restrictions');
	})->name('dra.restricciones');

	Route::get('/organos', function () {
		return view('cstr-su.organ');
	})->name('dra.organos');

	/*Route::get('/citas', function () {
		return view('cstr-su.appointment');
	})->name('dra.citas');*/

	/*Route::get('/inventario', function () {
		return view('cstr-su.inventory');
	})->name('inventario');*/

	/*Route::get('inventario', [
		'uses' => 'ProductController@index',
		'as' => 'dra.inventario'
		]);*/

	Route::get('producto-nuevo', function () {
			dd('VIsta formulario priducto nuevo');
		})->name('dra.producto-nuevo');

	
});

Route::group(['middleware' => ['web', 'auth']], function () {

	Route::get('/citas', function () {
		return view('cstr-ad.start');
	})->name('citas');

});


/*Route::get('/calendario', function () {
	return view('cstr-su.home');
});*/

Auth::routes();

//Route::get('/home', 'HomeController@index');
