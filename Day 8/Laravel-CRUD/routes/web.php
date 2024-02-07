<?php

use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/', [KontakController::class, 'index']);
Route::get('/input', [KontakController::class, 'input']);
Route::post('/save', [KontakController::class, 'save']);
Route::get('/delete/{id}', [KontakController::class, 'delete']);
Route::get('/edit/{id}', [KontakController::class, 'edit']);
Route::post('/update', [KontakController::class, 'update']);












