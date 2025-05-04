<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lists', fn () => view('lists.index'));


//yourdomain.com/contact    /about/ 