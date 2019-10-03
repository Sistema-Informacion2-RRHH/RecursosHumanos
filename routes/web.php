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

//Route::get('/', function () {
	
//	return view('welcome');
//});
Route::get('/', 'InicioController@index');


Route::resource('bitacora','BitacoraController');
Route::resource('turno','TurnoController');
Route::resource('cargo','CargoController');
Route::resource('departamento','DepartamentoController');
Route::resource('empleado','EmpleadoController');
Route::resource('capacitacion','CapacitacionController');
Route::resource('horario','HorarioController');
Route::resource('informacionprivada','InformacionPrivadaController');
Route::resource('user','UserController');
Route::resource('privilegio','PrivilegioController');

Route::resource('beneficio','BeneficioController');
Route::resource('contrato','ContratoController');
Route::resource('seguro','SeguroController');
Route::resource('entrevista','EntrevistaController');
Route::resource('reclutamiento','ReclutamientoController');
Route::resource('postulante','PostulanteController');
Route::resource('seleccion','SeleccionController');
Route::resource('vacacion','VacacionController');
Route::resource('jefedepartamento','JefeDepartamentoController');
Route::resource('postreclut','PostReclutController');
Route::resource('periodoprueba','PeriodoPruebaController');
Route::resource('evaluacion','EvaluacionController');
Route::resource('planillaevaluacion','PlanillaEvaluacionController');

Route::get('/backup', 'BackupController@index');
Route::get('/exportar', 'BackupController@exportar');
Route::get('/importar', 'BackupController@importar');


Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('/{slug?}', 'HomeController@index');
Route::get('/{slug?}', function () {

	
	return view('welcome')->with('recursos',null);
});

