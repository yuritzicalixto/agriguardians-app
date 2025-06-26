<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/admin', function () {
//     return 'Hola desde el administrador';
// })->name('admin.dashboard');

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route::get('/', function () {
//     return view('admin.usuarios-unity');
// })->name('usuarios-unity');

//Rutas de Usuarios - crud table
Route::resource('users', UserController::class);
