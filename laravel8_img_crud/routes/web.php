<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/',[studentController::class,'index']);
Route::get('/add-student',[studentController::class,'create']);
