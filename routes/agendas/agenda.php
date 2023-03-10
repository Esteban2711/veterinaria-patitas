<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

Route::group(['prefix' => '/agenda', 'as' => 'agenda.'], function () {

    Route::get('/', [AgendaController::class, 'registro'])
    ->name('registro');

    
});