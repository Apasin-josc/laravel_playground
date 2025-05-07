<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', fn () => view('welcome'));

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/lists',[TaskController::class, 'index'])->name('tasks.index');
Route::get('/lists/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/lists/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/lists', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('/lists/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

