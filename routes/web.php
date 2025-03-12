<?php
<<<<<<< HEAD
=======

>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\RandevuController;
use App\Http\Controllers\IletisimController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\PanelController;

=======

// Ana Sayfa
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
Route::get('/', function () {
    return view('index');
})->name('home');

<<<<<<< HEAD
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


=======
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
>>>>>>> a57f353ab16e83b094a28709e76e5e74f00cc4be
