<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page1/{id?}', function (string $id = null) {
    return view('page1', ['id' => $id]);
});

Route::get('/page2/{id?}', function (string $id = null) {
    return view('page2', ['id' => $id]);
});

Route::get('/page3/{id?}', function (string $id = null) {
    return view('page3', ['id' => $id]); 
});




