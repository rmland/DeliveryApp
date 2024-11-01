<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome'); 
// });
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
Route::resource('administracion/users', UserController::class)->names('users');
Route::resource('administracion/roles', RoleController::class)->names('roles');


// Rutas publicas 
Route::get('/menu', function () {
    return view('public.menu');
})->name('public.menu');
Route::get('/contacto', function () {
    return view('public.contacto');
})->name('public.contacto');