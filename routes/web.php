<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DocenciaController;
use App\Http\Controllers\EntradaEstacionamientoController;
use App\Http\Controllers\EstatusController;

use App\Http\Controllers\TipoEntradaController;
use App\Http\Controllers\TipoVehiculoController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\UsuarioController;


Route::get('/',[UsuarioController::class,'usuario'])->name('/');

Route::get('/login',[SessionsController::class,'create'])->name('login.index');
Route::get('/register',[RegisterController::class,'create'])->name('register.index');

Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/login',[SessionsController::class,'store'])->name('register.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
    ->name('login.destroy');
Route::get('/admin', [AdminController::class, 'index'])
//esta ruta la encontramos en APP/HTTP/MIDDLAWERE/KERNEL
    ->middleware('auth.admin')
    ->name('admin.index');

 Route::resource('carrera',CarreraController::class);
    Route::resource('docencia',DocenciaController::class);
    Route::resource('entrada_estacionamiento',EntradaEstacionamientoController::class);
    Route::resource('estatus',EstatusController::class);
    Route::resource('historial',HistorialController::class);
    Route::resource('tipo_entrada',TipoEntradaController::class);
    Route::resource('tipo_vehiculo',TipoVehiculoController::class);
    Route::resource('user',UsuarioController::class);