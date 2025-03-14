<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacilitiesController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaymentController;

Route::resource('reservations', ReservationController::class)->middleware('auth');

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


Route::get('/fasilitas', [FacilitiesController::class, 'index'])->name('fasilitas');

Route::get('/tipekamar', function () {
    return view('tipekamar');
});

Route::get('/crudtipekamar', function () {
    return view('create-tipekamar');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});




// untuk yg sudah login
Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
        Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
        // Route::get('/room/create/{id?}', [RoomController::class, 'create'])->name('room.create');
        Route::get('/rooms/create/{id?}', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
        Route::put('/room/{id}', [RoomController::class, 'update'])->name('room.update');
        Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        // Route::put('/room/{id}', [RoomController::class, 'update'])->name('rooms.update');
        // Route::delete('/room/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        Route::get('/fasilitas/create/{id?}', [FacilitiesController::class, 'create'])->name('fasilitas.create');
        Route::post('/fasilitas', [FacilitiesController::class, 'store'])->name('fasilitas.store');
        Route::put('/fasilitas/{id}', [FacilitiesController::class, 'update'])->name('fasilitas.update');
        Route::delete('/fasilitas/{id}', [FacilitiesController::class, 'destroy'])->name('fasilitas.destroy');
        Route::get('/bulanan', function () {
            return view('bulanan');
        });
        Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index'); // Daftar reservasi
        Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit'); // Form edit
        Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update'); // Proses edit
        Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy'); // Hapus reservasi
        Route::post('/payment/{id}/verify', [PaymentController::class, 'verify'])->name('payment.verify');
    });

    // Rute untuk customer
    Route::middleware('customer')->group(function () {
        Route::get('/user/dashboard', [HomeController::class, 'customer'])->name('customer.dashboard');
        Route::get('/profil', [HomeController::class, 'profil'])->name('customer.profil')->middleware('customer');
        Route::get('/reservations/create/{room_id?}', [ReservationController::class, 'create'])->name('reservations.create'); // Form buat reservasi
        Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store'); // Simpan reservasi
        Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment.show');
        Route::post('/payment/{id}/pay', [PaymentController::class, 'pay'])->name('payment.pay');
    });
    Route::get('/edit', [AuthController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{id}', [AuthController::class, 'update'])->name('customer.update');
});


//route resource for products
// Route::resource('/fasilitas', \App\Http\Controllers\FasilitasController::class);
