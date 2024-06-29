<?php

use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComunicacionesController;
use App\Http\Controllers\EstablecimientosController;
use App\Models\Actividades;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::group(['middleware' => 'auth'], function () {
    // Rutas para administradores
    Route::group(['middleware' => ['auth', 'can:admin'], 'prefix' => 'admin'], function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    });

    // Rutas para responsables
    Route::group(['middleware' => 'can:responsable'], function () {
        // Rutas para responsables
    });

    // Rutas para visitantes (usuarios no autenticados)
    Route::group(['middleware' => 'can:visitante'], function () {
        // Rutas para visitantes
    });
});*/
 //RUTAS DEL ADMINISTRADOR
Route::get('/admin/establecimientos/crear', [EstablecimientosController::class, 'crearEstablecimientos'])->middleware('auth');
Route::get('/admin/establecimientos/mostrar', [EstablecimientosController::class, 'verEstablecimientos'])->middleware('auth');
Route::post('/admin/establecimiento/guardar', [EstablecimientosController::class, 'guardarEstablecimiento'])->middleware('auth');

Route::get('/admin/dashboard/crear', [AdminController::class, 'dashboard'])->middleware('auth'); //Crear Responsable
Route::get('/admin/dashboard/mostrar', [AdminController::class, 'verResponsables'])->middleware('auth');
Route::post('/admin/dashboard/guardar', [AdminController::class, 'guardarResponsable'])->middleware('auth');

Route::get('/admin/comunicacion/crear', [ComunicacionesController::class, 'crearComunicaciones'])->middleware('auth'); //Crear Comunicacion
Route::get('/admin/comunicacion/mostrar', [ComunicacionesController::class, 'verComunicaciones'])->middleware('auth');
Route::post('/admin/comunicacion/guardar', [ComunicacionesController::class, 'guardarComunicacion'])->middleware('auth');

Route::get('/admin/actividad/crear', [ActividadesController::class, 'crearActividades'])->middleware('auth'); //Crear Actividad
Route::get('/admin/actividad/mostrar', [ActividadesController::class, 'verActividades'])->middleware('auth');
Route::post('/admin/actividad/guardar', [ActividadesController::class, 'guardarActividad'])->middleware('auth');

//RUTAS DEL RESPONSABLE
Route::get('/responsable/actividades/crear', [ActividadesController::class, 'crearActividades'])->middleware('auth');
Route::get('/responsable/actividades/ver', [ActividadesController::class, 'verActividades'])->middleware('auth');
Route::post('/responsable/actividades/guardar', [ActividadesController::class, 'guardarActividad'])->middleware('auth');

Route::get('/responsable/comunicaciones/crear', [ComunicacionesController::class, 'crearComunicaciones'])->middleware('auth');
Route::get('/responsable/comunicaciones/mostrar', [ComunicacionesController::class, 'verComunicaciones'])->middleware('auth');

Route::get('/responsable/responsables/mostrar', [AdminController::class, 'verResponsables'])->middleware('auth');


 //RUTAS DEL VISITANTE
Route::get('/visitante/actividades/ver', [ActividadesController::class, 'verActividades'])->middleware('auth');
Route::get('/visitante/responsables/mostrar', [AdminController::class, 'verResponsables'])->middleware('auth');
Route::get('/visitante/establecimientos/mostrar', [EstablecimientosController::class, 'verEstablecimientos'])->middleware('auth');

//Route::get('/admin/establecimientos/', [AdminController::class, 'establecimientos'])->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
