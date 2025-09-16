<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); 
})->name('home');


Route::get('/catalogo', fn() => view('catalogo'))->name('catalogo');
Route::get('/contactenos', fn() => view('contactenos'))->name('contactenos');
Route::get('/recomendaciones', fn() => view('recomendaciones'))->name('recomendaciones');


Route::get('/inicio-sesion', fn() => view('auth.login'))->name('inicio-sesion');


require __DIR__.'/auth.php';
