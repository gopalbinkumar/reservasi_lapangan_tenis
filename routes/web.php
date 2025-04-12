<?php

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
    return view('welcome');
});

Route::get('/dashboardadmin', function () {
    return view('admin.dashboard');
});

Route::get('/kelolalapanganadmin', function () {
    return view('admin.lapangan');
});

Route::get('/reservasiadmin', function () {
    return view('admin.reservasi');
});

Route::get('/listcustomeradmin', function () {
    return view('admin.customer');
});

Route::get('/transaksiadmin', function () {
    return view('admin.transaksi');
});

Route::get('/laporanadmin', function () {
    return view('admin.laporan');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});