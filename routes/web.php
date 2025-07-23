<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('welcome');
});

Auth::routes();

Route::resource('pasajeros', App\Http\Controllers\PasajeroController::class)->middleware('auth');
Route::resource('rutas', App\Http\Controllers\RutaController::class)->middleware('auth');
Route::resource('viajes', App\Http\Controllers\ViajeController::class)->middleware('auth');
Route::resource('conductores', App\Http\Controllers\ConductoreController::class)->middleware('auth');
Route::resource('colectivos', App\Http\Controllers\ColectivoController::class)->middleware('auth');
Route::resource('boletos', App\Http\Controllers\BoletoController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
