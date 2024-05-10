<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/lista/criar',[ListaController::class, 'create'])->name('lista.create');
    Route::post('/lista/criar',[ListaController::class, 'store'])->name('lista.create');

    Route::get('/lista/editar{id}',[ListaController::class, 'edit'])->name('lista.edit');
    Route::post('/lista/editar{id}',[ListaController::class, 'update'])->name('lista.update');

});

require __DIR__.'/auth.php';
