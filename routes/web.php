<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [NewsController::class, 'index']);
Route::get('/addNew', [NewsController::class, 'create']);
Route::post('/addNew', [NewsController::class, 'store']);
