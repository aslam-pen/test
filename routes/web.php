<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pdf', [TestController::class, 'pdf']);
Route::get('pdf2', [TestController::class, 'pdf2']);