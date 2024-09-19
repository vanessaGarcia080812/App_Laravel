<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\PrestacionController;
use App\Http\Controllers\SeguridadSocialController;


Route::get('/prueba/vista1', [PruebaController::class, 'mostrar_vista1'])->name('ruta_vista1');
Route::get('/prueba/vista2', [PruebaController::class, 'mostrar_vista2'])->name('ruta_vista2');
Route::get('/', [PruebaController::class, 'mostrar_vista3'])->name('ruta_vista3');


Route::get('/prueba/calculadora', [PruebaController::class, 'mostrar_calculadora'])->name('ruta_mostrar_calculadora');
Route::post('/prueba/calcuadora', [PruebaController::class, 'calcular'])->name('ruta_resultado_calculadora');


Route::get('producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/sotre', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');


Route::get('tipoEmpleado/tipoempleado/crear', [TipoEmpleadoController::class, 'create'])->name('tipoempleado.create');
Route::post('tipoEmpleado/tipoempleado', [TipoEmpleadoController::class, 'store'])->name('tipoempleado.store');
Route::get('tipoEmpleado/tipoempleado', [TipoEmpleadoController::class, 'index'])->name('tipoempleado.index');

Route::get('/prestaciones/prestaciones/crear', [PrestacionController::class, 'create'])->name('prestaciones.create');
Route::post('/prestaciones/prestaciones', [PrestacionController::class, 'store'])->name('prestaciones.store');
Route::get('/prestaciones/prestaciones', [PrestacionController::class, 'index'])->name('prestaciones.index');


Route::get('/seguridadSocial/seguridadsocial/crear', [SeguridadSocialController::class, 'create'])->name('seguridadsocial.create');
Route::post('/seguridadSocial/seguridadsocial', [SeguridadSocialController::class, 'store'])->name('seguridadsocial.store');
Route::get('/seguridadSocial/seguridadsocial', [SeguridadSocialController::class, 'index'])->name('seguridadsocial.index');
