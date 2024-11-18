<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\Categoria;
use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// Rutas publicas 
Route::get('/contacto', function () {
    return view('public.contacto');})->name('public.contacto');

// rutas de administracion
include('admin.php');
include('public.php');