<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;

Route::get('/search', [UserController::class, 'showSearchForm']);
Route::post('/search', [UserController::class, 'searchByEmail']);

