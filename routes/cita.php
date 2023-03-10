<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

Route::group(['prefix' => '/cita', 'as' => 'cita.'], function () {

    Route::post('/', [CitaController::class, 'store'])
    ->name('crear');

    Route::get('/', [CitaController::class, 'show'])
    ->name('ver');

    Route::get('consultas', function () {
        return view('consultar-cita'); 
    })->name('consultas');
    
    
    Route::get('/consultar-cita', [CitaController::class, 'consultarCita'])
    ->name('consultar-cita');
});
