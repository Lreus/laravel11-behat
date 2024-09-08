<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::get('/quotes', [QuoteController::class, 'index']);
