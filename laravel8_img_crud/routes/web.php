<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/student',[studentController::class,'index']);
Route::get('/add-student',[studentController::class,'create']);
Route::post('/add-student',[studentController::class,'store']);
Route::get('/edit-student/{id}',[studentController::class,'edit']);
Route::put('/update-student/{id}',[studentController::class,'update']);
// Route::get('/delete-student/{id}',[studentController::class,'destroy']);
Route::delete('/delete-student/{id}',[studentController::class,'destroy']);
