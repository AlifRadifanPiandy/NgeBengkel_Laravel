<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\Auth\AuthController::class, 'index_login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\AuthController::class, 'login']);
});

Route::get('/register', [App\Http\Controllers\Auth\AuthController::class, 'index_register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\AuthController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

    // Home and Resource Routes
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Home Routes
    Route::get('/home/orderlist', [App\Http\Controllers\HomeController::class, 'orderlist'])->name('home.orderlist');
    Route::get('/home/sparepart', [App\Http\Controllers\HomeController::class, 'sparepart'])->name('home.sparepart');
    Route::get('/home/invoice', [App\Http\Controllers\HomeController::class, 'invoice'])->name('home.invoice');
    Route::get('/home/invoiceUser/{id}', [App\Http\Controllers\HomeController::class, 'invoiceUser'])->name('home.invoiceUser');
    Route::get('/home/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('home.profile');

    // Sparepart Routes
    Route::resource('sparepart', App\Http\Controllers\SparepartController::class);

    // Vehicle Routes
    Route::resource('vehicle', App\Http\Controllers\VehicleController::class);

    // Booking Routes
    Route::post('/booking/{service_type}', [App\Http\Controllers\BookingController::class, 'store'])->name('booking.store');
    Route::put('/booking/{id}', [App\Http\Controllers\BookingController::class, 'update'])->name('booking.update');
    Route::put('/booking/updateSparepart/{sparepart}', [App\Http\Controllers\BookingController::class, 'updateSparepart'])->name('booking.updateSparepart');
    Route::delete('/booking/{booking}', [App\Http\Controllers\BookingController::class, 'destroy'])->name('booking.destroy');

    // Invoice 
    Route::get('/booking/invoice/{booking}', [App\Http\Controllers\BookingController::class, 'invoice'])->name('booking.invoice');
    Route::get('/booking/invoiceUser/{id}', [App\Http\Controllers\BookingController::class, 'invoiceUser'])->name('booking.invoiceUser');
});