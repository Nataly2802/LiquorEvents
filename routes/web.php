<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('index'))->name('home');

Route::get('/catalogo', fn() => view('catalogo'))->name('catalogo');
Route::get('/contactenos', fn() => view('contactenos'))->name('contactenos');
Route::get('/administrador', fn() => view('administrador'))->name('administrador');
Route::get('/participante', fn() => view('participante'))->name('participante');
Route::get('/recomendaciones', fn() => view('recomendaciones'))->name('recomendaciones');
Route::get('/registro', fn() => view('registro'))->name('registro');
Route::get('/registro-com', fn() => view('registro_com'))->name('registro-com');
Route::get('/inicio-sesion', fn() => view('inicio_sesion'))->name('inicio-sesion');
Route::get('/vendedor', fn() => view('vendedor'))->name('vendedor');


Route::get('/error-404', fn() => view('error_404'))->name('error.404');
Route::get('/error-500', fn() => view('error_500'))->name('error.500');
