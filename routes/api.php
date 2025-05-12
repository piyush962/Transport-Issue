<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('send-otp',[UserController::class,'sendOtp']);
Route::post('verify-otp',[UserController::class,'verifyOtp']);