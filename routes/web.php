<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FacilitiesController;

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


Route::get('/fasilitas',[FacilitiesController::class, 'index'])->name('fasilitas');

Route::get('/tipekamar', function () {
    return view('tipekamar');
});

// untuk yg sudah login
Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/fasilitas/create/{id?}', [FacilitiesController::class, 'create'])->name('fasilitas.create');
        Route::post('/fasilitas', [FacilitiesController::class, 'store'])->name('fasilitas.store');
        Route::put('/fasilitas/{id}', [FacilitiesController::class, 'update'])->name('fasilitas.update');
        Route::delete('/fasilitas/{id}', [FacilitiesController::class, 'destroy'])->name('fasilitas.destroy');
    });

    // Rute untuk customer
    Route::middleware('customer')->group(function () {
        Route::get('/user/dashboard', [HomeController::class, 'customer'])->name('customer.dashboard');
        Route::get('/profil', [HomeController::class, 'profil'])->name('customer.profil');
    });

    Route::get('/edit', [AuthController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{id}', [AuthController::class, 'update'])->name('customer.update');
});


//route resource for products
// Route::resource('/fasilitas', \App\Http\Controllers\FasilitasController::class);
