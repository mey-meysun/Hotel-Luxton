<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [AuthController::class, 'register'])->name('register');
  Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

  Route::get('/login', [AuthController::class, 'login'])->name('login');
  Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('/tipekamar', function () {
    return view('tipekamar');
});

Route::get('/register', function () {
    return view('register');
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [HomeController::class, 'index']);
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard-user', function () {
    return view('dashboard-user');
});
