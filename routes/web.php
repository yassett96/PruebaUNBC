<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('adminPanel', 'adminPanel')
    ->middleware(['auth'])
    ->name('adminPanel');

// Para obtener los datos en el panel de administrador
Route::get('adminPanel', [AdminController::class, 'index'])
    ->middleware(['auth'])
    ->name('adminPanel');

// Para guardar un nuevo usuario
Route::post('guardar-usuario', [AdminController::class, 'store'])
    ->name('adminPanelSave');

// Para actualizar el usuario
Route::put('actualizar-usuario/{id}', [AdminController::class, 'update'])
    ->name('adminPanelEdit');

// Para eliminar el usuario
Route::delete('eliminar-usuarios/{id}', [AdminController::class, 'destroy'])
    ->name('adminPanelDestroy');

require __DIR__.'/auth.php';
