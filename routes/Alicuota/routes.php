<?php

use App\Http\Controllers\Alicuota\AlicuotaAfipController;
use App\Http\Controllers\Alicuota\AlicuotaController;
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
    //----------- ALICUOTA AFIP ------------//
    Route::resource('alicuotaafip', AlicuotaAfipController::class);

    //----------- ALICUOTA ------------//
    Route::resource('alicuota', AlicuotaController::class);
});
