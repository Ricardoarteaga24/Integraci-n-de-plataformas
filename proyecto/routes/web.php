<?php

use App\Http\Controllers\LibroControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/libros', [LibroControlador::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
