<?php

use App\Http\Controllers\ProductoDosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accion', function () {
    return view('welcome_dos');
});

Route::get('/productos',
[ProductoDosController::class, 'index'])->name('producto.index');

Route::get('/productos/registro',
[ProductoDosController::class, 'create'])->name('producto.create');

Route::post('/productos/store',
[ProductoDosController::class, 'store'])->name('producto.store');
