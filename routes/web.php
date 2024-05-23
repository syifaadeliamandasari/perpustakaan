<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\passwordforgotController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\loginPetugasController;
use App\Http\Controllers\datakategoriController;
use App\Http\Controllers\databukuController;
use App\Http\Controllers\dataanggotaController;
use App\Http\Controllers\peminjamancontroller;
use App\Http\Controllers\pengambalianController;
use App\Http\Controllers\DashboardUser;
use App\Http\Controllers\DetailBookController;
use App\Http\Controllers\PopularBookController;
use App\Http\Controllers\ForYouController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\loginAdminController;
use App\Http\Controllers\loginUserController;

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

//petugas//
Route::get('/login', [loginPetugasController::class, 'petugasPage'])->name('login');
Route::get('/register', [RegisterController::class, 'registerPage'])->name('register');
Route::get('/lupa', [passwordforgotController::class, 'password'])->name('lupa');
Route::get('/petugas', [petugasController::class, 'petugasPage'])->name('petugas');
Route::get('/kategori', [datakategoriController::class, 'kategori'])->name('kategori');
Route::get('/buku', [databukuController::class, 'bukuPage'])->name('buku');
Route::get('/anggota', [dataanggotaController::class, 'anggotaPage'])->name('anggota');
Route::get('/peminjaman', [peminjamanController::class, 'peminjamanPage'])->name('peminjaman');
Route::get('/pengembalian', [pengambalianController::class, 'pengambalianPage'])->name('pengembalian');

//user//
Route::get('/dashboard', [DashboardUser::class, 'DashboardPage'])->name('dashboard');
Route::get('/dashboard/detailbook', [DetailBookController::class, 'DetailBookPage'])->name('detailbook');
Route::get('/dashboard/popular', [PopularBookController::class, 'index'])->name('popular');
Route::get('/dashboard/foryou', [ForYouController::class, 'index'])->name('foryou');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');
Route::get('/loginuser', [loginUserController::class, 'userPage'])->name('loginuser');

//admin//
Route::get('/loginadmin', [loginAdminController::class, 'adminPage'])->name('loginadmin');
