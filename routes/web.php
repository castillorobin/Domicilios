<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Spatie
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

Route::get('/filtroruta', [App\Http\Controllers\DashboardController::class, 'filtroruta'] )->name('filtroruta');
Route::get('/filtroentregado', [App\Http\Controllers\DashboardController::class, 'filtroentregado'] )->name('filtroentregado');
Route::get('/filtrofallido', [App\Http\Controllers\DashboardController::class, 'filtrofallido'] )->name('filtrofallido');
Route::get('/filtronoentregado', [App\Http\Controllers\DashboardController::class, 'filtronoentregado'] )->name('filtronoentregado');
Route::get('/filtroreprogramado', [App\Http\Controllers\DashboardController::class, 'filtroreprogramado'] )->name('filtroreprogramado');


//usuarios
//Route::get('/usuarios/lista', [App\Http\Controllers\DashboardController::class, 'usuarios'] )->name('indexuser') ;

Route::get('/usuarios/lista', [App\Http\Controllers\UsuarioController::class, 'index'] )->name('indexuser') ;

require __DIR__.'/auth.php';
