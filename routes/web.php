<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function(){

    Route::get('/', 'inicio')->name('inicio');
    Route::get('/convocatoria', 'convocatoria')->name('convocatoria');
    Route::get('/programa', 'programa')->name('programa');
    Route::get('/registro', 'registro')->name('registro');
    Route::get('/libros', 'libros')->name('libros');
    Route::get('/acceso', 'acceso')->name('acceso');
    Route::get('/galeria', 'galeria')->name('galeria');
});
