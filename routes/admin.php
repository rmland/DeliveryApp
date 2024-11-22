<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoHasPlatoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::resource('administracion/users', UserController::class)->middleware('can:users.index')->names('users');
Route::resource('administracion/roles', RoleController::class)->middleware('can:roles.index')->names('roles');
Route::resource('administracion/platos', PlatoController::class)->middleware('can:navigation.admin')->names('platos');
Route::resource('administracion/categorias', CategoriaController::class)->middleware('can:categorias.index')->names('categorias');
Route::resource('administracion/pedidos', PedidoController::class)->middleware('can:navigation.admin')->names('pedidos');
Route::resource('administracion/reportes', ReportesController::class)->middleware('can:navigation.admin')->names('reportes');
Route::resource('pedidos', RepartidorController::class)->names('repartidor.pedidos');