<?php

use App\Http\Controllers\Admin\GameProgressViewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserViewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('sitio.index');
});




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'sitio'], function (){

    Route::get( '/index', [App\Http\Controllers\FrontEndController::class, 'index'])->name('sitio.index');
    // Route::get( '/register', [App\Http\Controllers\FrontEndController::class, 'register'])->name('register');
    Route::get( '/preguntas', [App\Http\Controllers\FrontEndController::class, 'preguntas'])->name('sitio.preguntas');
    // Route::get( '/login', [App\Http\Controllers\FrontEndController::class, 'login'])->name('login');
});

// //Rutas de autenticación
// Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
// Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});


Route::get('/usuarios-unity', [UserViewController::class, 'index'])
     ->name('admin.usuarios-unity');

Route::get('/progreso-unity', [GameProgressViewController::class, 'index'])
     ->name('admin.progreso-unity');

// Route::get('/', function () {
//     return view('admin.dashboard');
// })->name('dashboard');

//Rutas de autenticación
Route::get('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store']);
Route::get('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisteredUserController::class, 'store']);


