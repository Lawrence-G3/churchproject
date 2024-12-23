<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\SermonsController;
use App\Http\Controllers\Admin\DonationsController;
use App\Http\Controllers\Admin\SettingsController;

// Normal routes
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard'); 
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('frontend.home');
});

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Admin routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/members', [MembersController::class, 'index'])->name('admin.members');
    Route::get('/events', [EventsController::class, 'index'])->name('admin.events');
    Route::get('/sermons', [SermonsController::class, 'index'])->name('admin.sermons');
    Route::get('/donations', [DonationsController::class, 'index'])->name('admin.donations');
    Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
});

// Additional routes and includes
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
