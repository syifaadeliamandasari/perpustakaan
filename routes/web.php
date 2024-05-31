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

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\AdminBukuController;
use App\Http\Controllers\ReportDendaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ReportPeminjamanController;
use App\Http\Controllers\ReportPengembalianController;
use App\Http\Controllers\LoginController;

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
Route::post('/postlogin', [loginUserController::class, 'postlogin'])->name('postlogin');


//admin//
Route::get('/loginadmin', [loginAdminController::class, 'adminPage'])->name('loginadmin');
Route::post('/postadmin', [loginAdminController::class, 'postadmin'])->name('postadmin');
Route::get('/dashboardAdmin', [DashboardAdminController::class, 'index'])->name('dA');
Route::get('/adminBuku', [AdminBukuController::class, 'index'])->name('aB');
Route::get('/reportDenda', [ReportDendaController::class, 'index'])->name('rD');
Route::get('/member', [MemberController::class, 'index'])->name('member');
Route::get('/reportPeminjaman', [ReportPeminjamanController::class, 'index'])->name('rPJ');
Route::get('/reportPengembalian', [ReportPengembalianController::class, 'index'])->name('rPG');



Route::get('/login/user', [LoginController::class, 'showUserLoginForm'])->name('login.user');
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm'])->name('login.admin');
Route::get('/login/petugas', [LoginController::class, 'showPetugasLoginForm'])->name('login.petugas');

Route::post('/login/user', [LoginController::class, 'userLogin']);
Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/petugas', [LoginController::class, 'petugasLogin']);


Route::get('/dashboard/user', function () {
    return view('dashboard.user');
})->middleware('auth', 'role:user');

Route::get('/dashboard/admin', function () {
    return view('dashboard.admin');
})->middleware('auth', 'role:admin');

Route::get('/dashboard/petugas', function () {
    return view('dashboard.petugas');
})->middleware('auth', 'role:petugas');