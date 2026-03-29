<?php

use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name('home');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Client
Route::prefix('client')
    ->name('client.')
    ->middleware(['auth', 'role:client'])
    ->group(function () {
        Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');
        Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');
        Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('conferences.register');
    });

// Employee
Route::prefix('employee')
    ->name('employee.')
    ->middleware(['auth', 'role:employee'])
    ->group(function () {
        Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');
        Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('conferences.show');
    });

// Admin
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');

        Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');
        Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
        Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');
        Route::get('/conferences/{id}', [ConferenceController::class, 'show'])->name('conferences.show');
        Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
        Route::post('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');
        Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
    });