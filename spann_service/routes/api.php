<?php

use App\Http\Controllers\Api\FeedbackSlidesController;
use App\Http\Controllers\Api\SendEmailController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\Api\MainSlidesController;
use App\Http\Controllers\Api\DoubleSlidesController;
use App\Http\Controllers\Api\PartnersController;
use App\Http\Controllers\Api\SettingsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('services', [ServicesController::class, 'index']);
Route::get('partners', [PartnersController::class, 'index']);
Route::get('main-slides', [MainSlidesController::class, 'index']);
Route::get('feedback-slides', [FeedbackSlidesController::class, 'index']);
Route::get('double-slides', [DoubleSlidesController::class, 'index']);
Route::get('settings', [SettingsController::class, 'index']);
Route::post('send-email', [SendEmailController::class, 'store']);
