<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WTGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('user')->group(function () {

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::prefix('groups')->group(function () {
    Route::get('/whatsapp-group-number', [WTGroup::class, 'numberOfWhatsappGroups']);
    Route::get('/telegram-group-number', [WTGroup::class, 'numberOfTelegramGroups']);
    Route::get('/', [WTGroup::class, 'index']);

    Route::middleware('auth:api')->group(function () {
        Route::post('/', [WTGroup::class, 'store']);
    });
});

Route::prefix('languages')->group(function () {

    Route::get('/', [LanguageController::class,'index']);
});

Route::prefix('categories')->group(function () {

    Route::get('/', [CategoryController::class,'index']);
});

