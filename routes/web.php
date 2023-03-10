<?php

use Illuminate\Support\Facades\Route;


include 'agendas/agenda.php';
include 'cita.php';

Route::get('/', function () {
    return view('welcome'); 
})->name('inicio');


Route::get('consultar', function () {
    return view('consultar-cita'); 
})->name('consultar');


Route::get('iniciar-sesion', function () {
    return view('iniciar-sesion'); 
})->name('iniciarSesion');

Route::get('administracion', function () {
    return view('administracion'); 
})->name('administracion');