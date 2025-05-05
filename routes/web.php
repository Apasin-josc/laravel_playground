<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', fn () => view('welcome'));

Route::get('/lists',[TaskController::class, 'index'])->name('tasks.index');
Route::get('/lists/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/lists/{id}', [TaskController::class, 'show'])->name('tasks.show');


//yourdomain.com/contact    /about/ 