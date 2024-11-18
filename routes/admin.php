<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoHasPlatoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::resource('administracion/users', UserController::class)->middleware('can:users.index')->names('users');
Route::resource('administracion/roles', RoleController::class)->names('roles');
Route::resource('administracion/platos', PlatoController::class)->names('platos');
Route::resource('administracion/categorias', CategoriaController::class)->names('categorias');
Route::resource('pedidos', PedidoController::class)->names('pedidos');
Route::resource('pedido_has_platos', PedidoHasPlatoController::class)->names('pedido_has_platos');
Route::resource('reportes', ReportesController::class)->names('reportes');