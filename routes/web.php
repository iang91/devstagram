<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal', ['name' => 'Inicio']);
});
Route::get('/nosotros', function () {
    return view('nosotros', ['name' => 'Nosotros']);
});
Route::get('/tienda', function () {
    return view('tienda', ['name' => 'Tienda']);
});
