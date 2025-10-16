<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfileController;


// Halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');
//profile 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
// Halaman About
Route::get('/About', function () {
    return view('About');
})->name('About');

// Halaman Kontak
Route::get('/Kontak', function () {
    return view('Kontak');
})->name('Kontak');

// Register
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Profil Controller
Route::get('/profil/rocky', [ProfilController::class, 'rocky'])->name('profil.rocky');
Route::get('/profil/janshen', [ProfilController::class, 'janshen'])->name('profil.janshen');
Route::get('/profil/dennis', [ProfilController::class, 'dennis'])->name('profil.dennis');
Route::get('/profil/isro', [ProfilController::class, 'isro'])->name('profil.isro');
