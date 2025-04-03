<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;

Route::resource('promotions', ResourceController::class);
Route::get('/', [ResourceController::class, 'index'])->name('home');