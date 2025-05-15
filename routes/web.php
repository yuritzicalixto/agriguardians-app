<?php

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
    Route::get( '/registro', [App\Http\Controllers\FrontEndController::class, 'registro'])->name('sitio.registro');
    Route::get( '/preguntas', [App\Http\Controllers\FrontEndController::class, 'preguntas'])->name('sitio.preguntas');
    Route::get( '/login', [App\Http\Controllers\FrontEndController::class, 'login'])->name('sitio.login');
});
