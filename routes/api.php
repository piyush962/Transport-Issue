<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\DeliveryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('send-otp',[UserController::class,'sendOtp']);
Route::post('verify-otp',[UserController::class,'verifyOtp']);
Route::post('forgot-password-otp',[UserController::class,'sendForgotPasswordOtp']);
Route::post('forgot-password-otp-verify',[UserController::class,'sendForgotPasswordOtpVerify']);
Route::post('reset-password',[UserController::class,'resetPassword']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/get-user', [UserController::class, 'getUser']);
    Route::post('/update-user', [UserController::class, 'updateUser']);  
    
    Route::get('/dashboard',[DashboardController::class, 'index']);

    Route::get('driver-listing', [UserController::class, 'driverListing']);    
    Route::get('support-listing', [UserController::class, 'supportTeamListing']);

    Route::get('delivery-listing', [DeliveryController::class, 'index']);
    Route::post('delivery-details', [DeliveryController::class, 'deliveryDetails']);
});


