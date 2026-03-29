<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;


// Home page
Route::get('/', function () {
    return view('home');
})->name('home');


// client
Route::prefix('client')->name('client.')->group(function () {

    Route::get('/conferences', [ClientController::class, 'index'])->name('conferences.index');

    Route::get('/conferences/{id}', [ClientController::class, 'show'])->name('conferences.show');

    Route::post('/conferences/{id}/register', [ClientController::class, 'register'])->name('conferences.register');
});


// Employee
Route::prefix('employee')->name('employee.')->group(function () {

    Route::get('/conferences', [EmployeeController::class, 'index'])->name('conferences.index');

    Route::get('/conferences/{id}', [EmployeeController::class, 'show'])->name('conferences.show');
});


//  admin
Route::prefix('admin')->name('admin.')->group(function () {

    // dashboard
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

    Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::get('/conferences', [ConferenceController::class, 'index'])->name('conferences.index');

    Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');

    Route::post('/conferences', [ConferenceController::class, 'store'])->name('conferences.store');

    Route::get('/conferences/{id}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');

    Route::post('/conferences/{id}', [ConferenceController::class, 'update'])->name('conferences.update');

    Route::delete('/conferences/{id}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
});