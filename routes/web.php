<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AdministradoController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\DocumentoTempController;
use App\Http\Controllers\IndicacionController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\MovimientoExternoController;
use App\Http\Controllers\MovimientoInternoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\ProcedimientoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\TipoPersonaController;
use App\Models\Administrado;
use App\Models\Documento;
use App\Models\DocumentoTemp;
use App\Models\Movimiento;
use App\Models\MovimientoExterno;
use App\Models\MovimientoInterno;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('form', function(){
		return view('Formulario.create');
	});
	Route::resource('administrados', AdministradoController::class);
	Route::resource('areas', AreaController::class);
	Route::resource('asignacion', AsignacionController::class);
	Route::resource('documentos', DocumentoController::class);
	Route::resource('clases',ClaseController::class);
	Route::resource('documentos-temp', DocumentoController::class);
	Route::resource('indicaciones', DocumentoTempController::class);
	Route::resource('movimientos', MovimientoController::class);
	Route::resource('movimiento-externo', MovimientoExternoController::class);
	Route::resource('movimiento-interno', MovimientoInternoController::class);
	Route::resource('oficinas', OficinaController::class);
	Route::resource('procedimientos', ProcedimientoController::class);
	Route::resource('tipo-persona', TipoPersonaController::class);
	Route::resource('tipo-documento', TipoDocumentoController::class);	
});



