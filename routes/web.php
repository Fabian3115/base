<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ValidarController;
use App\Http\Controllers\Crud\LibrosController;
use App\Http\Controllers\Crud\PerfilController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('Login.Login');
})->name('inicio');

Route::middleware('web')->group(function() {

    Route::get('/login', [ValidarController::class, 'showLoginForm'])->name('inicio');
    Route::post('/login', [ValidarController::class, 'login'])->name('Validar');

    Route::get('/logout', [ValidarController::class, 'logout'])->name('logout');

    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);


    Route::middleware('auth')->group(function(){
        Route::get('/admin/dashboard', function (){
            return view('Interfaz.dashboard_admin');
        })->name('admin.dashboard')->middleware('is_admin');

        Route::get('/user/dashboard', function (){
            return view('Interfaz.dashboard_user');
        })->name('user.dashboard');
    });

    Route::get('/user/dashboard/perfil', [PerfilController::class, 'index'])->name('perfil');
    Route::resource('/admin/dashboard/libro', LibrosController::class);
    Route::get('/admin/dashboard/libro/destroy/{id}',[ LibrosController::class , 'destroy'])->name('libro.destroy');
});