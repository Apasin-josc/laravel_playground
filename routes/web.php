<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lists',[TaskController::class, 'index']);

Route::get('/lists/create', [TaskController::class, 'create']);

Route::get('/lists/{id}', [TaskController::class, 'show']);


//yourdomain.com/contact    /about/ 