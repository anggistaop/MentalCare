<?php

use App\Http\Controllers\AuthController;
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
Route::resource('/', \App\Http\Controllers\HomeController::class);

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