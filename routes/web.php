<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lists',[TaskController::class, 'index']);

Route::get('/lists/create', function () {
    return view('lists.create');
});

Route::get('/lists/{id}', function ($id){
    //fetch record with id
    return view('lists.show', ["id" => $id]);
});


//yourdomain.com/contact    /about/ 