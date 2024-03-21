<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('makros');
});
Route::get('/home', function () {
    return view('welcome');
});
