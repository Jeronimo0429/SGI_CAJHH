<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.plantilla');
});

Route::resource('usuario', 'App\Http\Controllers\usuarioController');
Route::resource('inventario', 'App\Http\Controllers\inventarioController');
