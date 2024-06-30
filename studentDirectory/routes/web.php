<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/result', function () {
    return file_get_contents(public_path('result.html'));
});
