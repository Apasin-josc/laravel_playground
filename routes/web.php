<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', fn () => view('welcome'));

Route::get('/lists',[TaskController::class, 'index'])->name('tasks.index');
Route::get('/lists/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/lists/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/lists', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('/lists/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');

