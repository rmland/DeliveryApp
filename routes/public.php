<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DireccioneController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;



Route::get('/carrito/pedidos-pendientes', [CarritoController::class, 'show'])->name('carrito.pendientes');
Route::resource('/carrito', CarritoController::class)->names('carrito');
Route::resource('/menu', MenuController::class)->names('menu');
Route::resource('/contacto', ContactoController::class)->names('contacto');

Route::get('direcciones/add',[DireccioneController::class, 'add'])->name('direcciones.add');
Route::resource('direcciones', DireccioneController::class);