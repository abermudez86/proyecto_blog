<?php

use App\Http\Controllers\Actividad\ActividadController;
use App\Http\Controllers\Actividad\ActividadParticipanteController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
    //----------- ACTIVIDAD ------------//
    Route::resource('actividad', ActividadController::class);

    //----------- ACTIVIDAD PARTICIPANTE ------------//
    Route::resource('actividadparticipante', ActividadParticipanteController::class);
});
