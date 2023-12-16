<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PsikologController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Home
Route::get('/', [HomeController::class, 'index'])->name('index');

//Account
Route::get('/account', function () {
    return view('account.account');
})->name('account');

//Konseling
Route::get('/konselingindividual', function () {
    return view('konseling.individu.konselingIndividu');
})->name('konselingIndividu');

Route::get('/individuConselingCorner', function () {
    return view('konseling.individu.individuConselingCorner');
})->name('individuConselingCorner');

Route::get('/individuEconseling', function () {
    return view('konseling.individu.individuEconseling');
})->name('individuEconseling');

Route::get('/konselingPasangan', function () {
    return view('konseling.pasangan.konselingPasangan');
})->name('konselingPasangan');

Route::get('/pasanganOffline', function () {
    return view('konseling.pasangan.pasanganOffline');
})->name('pasanganOffline');

Route::get('/pasanganOnline', function () {
    return view('konseling.pasangan.pasanganOnline');
})->name('pasanganOnline');

Route::get('/konselingKeluarga', function () {
    return view('konseling.keluarga.konselingKeluarga');
})->name('konselingKeluarga');

Route::get('/familyConseling', function () {
    return view('konseling.keluarga.familyConseling');
})->name('familyConseling');

//Psikolog
Route::get('/psikolog', [PsikologController::class, 'index'])->name('psikolog');

//Artikel
Route::get('/artikel1', function() {
    return view('artikel.artikel1');
})->name('artikel1');

Route::get('/artikel2', function() {
    return view('artikel.artikel2');
})->name('artikel2');

Route::get('/artikel3', function() {
    return view('artikel.artikel3');
})->name('artikel3');

Route::get('/artikel4', function() {
    return view('artikel.artikel4');
})->name('artikel4');

//Admin
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::resource('/admin/dashboard', \App\Http\Controllers\DashboardController::class);
    
    Route::resource('/admin/jadwal', \App\Http\Controllers\AdminJadwalController::class);
    
    Route::resource('/admin/psikolog', \App\Http\Controllers\AdminPsikologController::class);
    
    Route::resource('/admin/user', \App\Http\Controllers\AdminUserController::class);
});


