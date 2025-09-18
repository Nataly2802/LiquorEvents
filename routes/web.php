<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\TorneoController;

// Página principal
Route::get('/', fn() => view('index'))->name('home');

// Páginas públicas
Route::get('/catalogo', [ProductoController::class,'index'])->name('catalogo');
Route::get('/contactenos', fn() => view('contactenos'))->name('contactenos');
Route::get('/recomendaciones', fn() => view('recomendaciones'))->name('recomendaciones');
Route::get('/inicio_sesion', fn() => view('auth.login'))->name('inicio_sesion');


// Importa las rutas de autenticación de Breeze
require __DIR__.'/auth.php';
use App\Http\Controllers\ProfileController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Dashboard general
Route::get('/dashboard', fn() => view('dashboard'))
    ->middleware(['auth'])
    ->name('dashboard');

// --- RUTAS SEGÚN ROL ---
// Solo admin o empleado
Route::middleware(['auth','role:administrador|empleado'])->group(function () {
    Route::resource('productos', ProductoController::class);
    Route::resource('ventas', VentaController::class);
    Route::resource('torneos', TorneoController::class);
});

// Solo admin
Route::middleware(['auth','role:administrador'])->group(function () {
    Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class,'index'])
        ->name('admin.users.index');
});

// Vistas por rol (para las redirecciones de login)
Route::get('/administrador', fn() => view('administrador'))->name('administrador');
Route::get('/participante', fn() => view('participante'))->name('participante');
Route::get('/vendedor', fn() => view('vendedor'))->name('vendedor');

