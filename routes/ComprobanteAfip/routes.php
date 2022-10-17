<?php

use App\Http\Controllers\ComprobanteAfip\TipoComprobanteAfipController;
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
    //----------- TIPO COMPROBANTE AFIP ------------//
    Route::resource('tipocomprobanteafip', TipoComprobanteAfipController::class);
});
