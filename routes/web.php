<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// untuk yg belum login
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name(name: 'register.post');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
});

// untuk publik
Route::get('/', function () {
    return view('home');
});


Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/tipekamar', function () {
    return view('tipekamar');
});

// untuk yg sudah login
Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });    

    // Rute untuk customer
    Route::middleware('customer')->group(function () {
        Route::get('/user/dashboard', [HomeController::class, 'customer'])->name('customer.dashboard');
        Route::get('/profil', [HomeController::class, 'profil'])->name('customer.profil');
        Route::get('/profiledit', [HomeController::class, 'profiledit'])->name('customer.profiledit');
        Route::put('/profiledit/{id}', [HomeController::class, 'updateProfile'])->name('customer.profiledit.update');

    });
});
//route resource for products
// Route::resource('/fasilitas', \App\Http\Controllers\FasilitasController::class);
