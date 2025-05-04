<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lists', function (){
    $tasks = [
        ["name" => "itmakesense", "priority" => "high", "id" => "1"],
        ["name" => "do exercise", "priority" => "low", "id" => "2"],
    ];
    return view('lists.index', ["greeting" => "hello", "tasks" => $tasks]);
});

Route::get('/lists/create', function () {
    return view('lists.create');
});

Route::get('/lists/{id}', function ($id){
    //fetch record with id
    return view('lists.show', ["id" => $id]);
});


//yourdomain.com/contact    /about/ 