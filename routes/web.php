<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::post('/request-code', [AuthController::class, 'requestCode'])->name('request-code');
Route::post('/login', [AuthController::class, 'login'])->name('login-user');
Route::get('/addNew', [NewsController::class, 'create']);
Route::post('/addNew', [NewsController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



