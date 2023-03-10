<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

include 'agendas/agenda.php';
include 'cita.php';

Route::get('/', function () {
    return view('welcome'); 
})->name('inicio');



Route::get('administracion', function () {
    return view('administracion'); 
})->name('administracion');


Route::get('iniciar-sesion',[LoginController::class, 'verLogin'])->name('iniciarSesion');
Route::post('iniciar-sesion', [LoginController::class, 'login'])->name('loginSubmit');
