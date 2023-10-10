<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ReportController;
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
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
});

Route::prefix('groups')->group(function () {
    Route::get('/whatsapp-group-number', [WTGroup::class, 'numberOfWhatsappGroups']);
    Route::get('/telegram-group-number', [WTGroup::class, 'numberOfTelegramGroups']);
    Route::get('/', [WTGroup::class, 'index']);
    
    Route::get('/{group}', [WTGroup::class, 'show']);
    Route::middleware('auth:api')->group(function(){
        Route::get('/user-groups', [WTGroup::class, 'getUserGroups']);
        Route::delete('/{group}', [WTGroup::class, 'destroy']);
    });

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

Route::prefix('reports')->group(function () {

    Route::post('/', [ReportController::class,'store']);
});

Route::prefix('favorites')->middleware('auth:api')->group(function(){

    Route::post('/',[FavoriteController::class,'store']);
    Route::get('/',[FavoriteController::class,'index']);
});

