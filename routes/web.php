<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', fn () => view('welcome'));

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::middleware('auth')->controller(TaskController::class)->group(function () {
    Route::get('/lists', 'index')->name('tasks.index');
    Route::get('/lists/create', 'create')->name('tasks.create');
    Route::get('/lists/{id}', 'show')->name('tasks.show');
    Route::post('/lists', 'store')->name('tasks.store');
    Route::delete('/lists/{task}', 'destroy')->name('tasks.destroy');
});


