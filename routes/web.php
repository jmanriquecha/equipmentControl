<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\TrabajoController;

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

Route::get('/', function () {
    return view('index', ['page' => '']);
});

/**
 * Mis rutas personalizadas
 */

Route::resource('marcas', MarcaController::class);
Route::resource('tipos', TipoController::class);
Route::resource('equipos', EquipoController::class);
 Route::resource('trabajos', TrabajoController::class);