<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('inicio');
});

Route::resource('propietarios', App\Http\Controllers\PropietariosController::class);