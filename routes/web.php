<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/',   [HomeController::class , 'index'] )->name('alarmas');

Route::get('/equipos',   [EquipoController::class , 'index'] )->name('equipos');

Route::get('/bitacoras',   [BitacoraController::class , 'index'] )->name('bitacoras');




Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/alarmas', function () {
    return view('alarmas');
})->name('alarmas');

