<?php

use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vuelos', VueloController::class);
Route::resource('pasajeros', PasajeroController::class);
Route::resource('tickets', TicketController::class);
