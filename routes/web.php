<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\passwordforgotController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\datakategoriController;
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

//route login//
Route::get('/login', function () {
    return view('login');
});


Route::get('/register', [RegisterController::class, 'registerPage'])->name('register');
Route::get('/lupa', [passwordforgotController::class, 'password'])->name('lupa');
Route::get('/petugas', [petugasController::class, 'petugasPage'])->name('petugas');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/kategori', [datakategoriController::class, 'kategoriPage'])->name('kategori');

