<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\IletisimController;

// Ana Sayfa
Route::get('/', function () {
    return view('index');
})->name('home');

// İletişim Routes
Route::controller(IletisimController::class)->group(function () {
    Route::get('/iletisim', 'index')->name('iletisim');
    Route::post('/iletisim', 'store')->name('iletisim.store');
});

// Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');
});

// Appointment Routes
Route::controller(AppointmentController::class)->prefix('appointment')->group(function () {
    Route::get('/', 'index')->name('appointment.index');
    Route::get('/create', 'create')->name('appointment.create');
    Route::post('/', 'store')->name('appointment.store');
    Route::get('/{id}', 'show')->name('appointment.show');
    Route::delete('/{id}', 'destroy')->name('appointment.destroy');
});

// Admin Routes
Route::controller(RandevuController::class)->prefix('admin')->group(function () {
    Route::get('/randevukayit', 'create')->name('admin.randevu.create');
    Route::post('/randevukayit', 'store')->name('admin.randevu.store');
});
