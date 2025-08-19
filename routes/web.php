<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\UserController;

Route::controller(PublicController::class)->group(function(){

    Route::get('/', 'inicio')->name('inicio');
    Route::get('/convocatoria', 'convocatoria')->name('convocatoria');
    Route::get('/programa', 'programa')->name('programa');
    Route::get('/registro', 'registro')->name('registro');
    Route::get('/libros', 'libros')->name('libros');
    Route::get('/acceso', 'acceso')->name('acceso');
    Route::get('/galeria', 'galeria')->name('galeria');
});

// Rutas de autenticación
Route::controller(AuthController::class)->group(function(){
    Route::post('/registro', 'registro')->name('registro.submit');
    Route::post('/acceso', 'acceso')->name('acceso.submit');
    Route::post('/logout', 'logout')->name('logout');
});

// Rutas de usuario (requieren autenticación)
Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('/user/inicio', 'inicioUser')->name('user.inicio');
});

Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('/user/perfil', 'perfil')->name('user.perfil');
});

Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('/user/programa', 'programa')->name('user.programa');
});

Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('/user/libros', 'libros')->name('user.libros');
});

// Rutas para talleres (requieren autenticación)
Route::controller(TallerController::class)->middleware('auth')->group(function(){
    Route::get('/user/registrotalleres/taller1', 'taller1')->name('taller1');
    Route::post('/user/registrotalleres/taller1', 'registrarTaller1')->name('registrarTaller1');
    
    Route::get('/user/registrotalleres/taller2', 'taller2')->name('taller2');
    Route::post('/user/registrotalleres/taller2', 'registrarTaller2')->name('registrarTaller2');
    
    Route::get('/user/registrotalleres/taller3', 'taller3')->name('taller3');
    Route::post('/user/registrotalleres/taller3', 'registrarTaller3')->name('registrarTaller3');
    
    Route::get('/user/registrotalleres/taller4', 'taller4')->name('taller4');
    Route::post('/user/registrotalleres/taller4', 'registrarTaller4')->name('registrarTaller4');
});