<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\Admin\PanelController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/', function () {
    return auth()->check() ? redirect('/appointment') : view('index');
})->name('home');


// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/yonetim', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/yonetim', [AuthController::class, 'login'])->name('login.post');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Appointment Routes - Auth gerektiren rotalar
Route::middleware('auth')->group(function () {
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
});
Route::controller(PanelController::class)->prefix('admin')->group(function () {
    Route::get('/yonetim', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::get('/randevular', 'index')->name('admin.randevu.index');

}); 


