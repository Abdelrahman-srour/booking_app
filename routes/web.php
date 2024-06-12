<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EmployeeController;

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


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', [RoomController::class, 'index'])->name('dashboard.index');
    Route::get('clients', [ClientController::class, 'index'])->name('clients.index');
    Route::put('room/{id}', [RoomController::class, 'updateStatus'])->name('update.status');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('rooms', RoomController::class);
    Route::resource('bookings', BookingController::class);
});

Route::middleware(['auth:employee'])->group(function () {
    Route::get('/employee', [EmployeeController::class, 'index']);
    Route::post('/rooms/{room}/status', [RoomController::class, 'updateStatus']);
});

Route::middleware(['auth:client'])->group(function () {
    Route::get('/client', [ClientController::class, 'index']);
    Route::post('/bookings', [BookingController::class, 'store']);
});

// Route::middleware('auth')->group(function () {
//     // Admin/Employee Dashboard
//     Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

//     // Room Management
//     Route::resource('rooms', RoomController::class);

//     // Booking Management
//     Route::resource('bookings', BookingController::class)->except(['create', 'store']);
// });
