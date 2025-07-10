<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/admin', function () {
//     return 'Hola desde el administrador';
// })->name('admin.dashboard');

Route::get('/', function () {
    return view('admin.dashboard');
})
->middleware('can:access_dashboard')
->name('dashboard');

// Route::get('/', function () {
//     return view('admin.usuarios-unity');
// })->name('usuarios-unity');

//Rutas de Usuarios - crud table
Route::resource('users', UserController::class)
->middleware('can:manage_users');
Route::resource('roles', RoleController::class)
->middleware('can:manage_roles');
