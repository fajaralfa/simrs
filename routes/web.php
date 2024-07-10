<?php

use App\Http\Controllers\AdministrasiPasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TindakanMedisController;
use App\Http\Controllers\UserController;
use App\Models\AdministrasiPasien;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'login');
Route::view('/', 'home');
Route::resource('pasien', PasienController::class);
Route::resource('obat', ObatController::class);
Route::resource('pegawai', PegawaiController::class);
Route::resource('user', UserController::class);
Route::resource('tindakan', TindakanMedisController::class);
Route::redirect('/daftarkan-pasien', '/pasien/create');
Route::get('/administrasi', [AdministrasiPasienController::class, 'index']);
Route::get('/administrasi/{id}', [AdministrasiPasienController::class, 'show']);
Route::get('/administrasi/proses/{pasienId}', [AdministrasiPasienController::class, 'create']); // just for pretty url
Route::post('/administrasi/proses/{pasienId}', [AdministrasiPasienController::class, 'store']);
Route::post('/administrasi/proses/{pasienId}/pay', [AdministrasiPasien::class, 'pay']);