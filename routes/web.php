<?php

use App\Http\Controllers\AlarmasController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\UserController;
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

Route::get('/',   [HomeController::class , 'index'] )->middleware(['auth'])->name('home');

Route::get('/equipos',   [EquipoController::class , 'index'] )->middleware(['auth'])->name('equipos');

Route::get('/bitacoras',   [BitacoraController::class , 'index'] )->middleware(['auth'])->name('bitacoras');

Route::resource('/users', UserController::class)->middleware(['auth'])
    ->names('users');


Route::resource('/servicios', ServiciosController::class)->middleware(['auth'])
    ->names('servicios');

Route::resource('/equipos', EquipoController::class)->middleware(['auth'])
    ->names('equipos');

Route::resource('/alarmas', AlarmasController::class)->middleware(['auth'])
    ->names('alarmas');




// Route::get('/index', function () {
//     return view('index');
// })->name('index');



require __DIR__ . '/auth.php';
