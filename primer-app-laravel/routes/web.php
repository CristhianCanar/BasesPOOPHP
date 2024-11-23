<?php

use App\Http\Controllers\ProductoDosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accion', function () {
    return view('welcome_dos');
});

Route::get('/productos', [ProductoDosController::class, 'index']);
