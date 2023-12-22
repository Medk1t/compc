<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('client')->group(function(){
    
    Route::get('/',[clientController::class,'index']);
    Route::get('/{id}',[clientController::class,'show']);
    Route::post('/',[clientController::class,'store']);
    Route::delete('/{id}', [clientController::class,'destroy']);
    Route::put('/',[clientController::class,'update']);
});
Route::prefix('order')->group(function(){
    Route::get('/',[orderController::class,'index']);
    Route::get('/{id}',[orderController::class,'show']);
    Route::post('/',[orderController::class,'store']);
    Route::delete('/{id}', [orderController::class,'destroy']);
    Route::put('/',[orderController::class,'update']);
});

Route::prefix('seat')->group(function(){
    Route::get('/',[seatController::class,'index']);
    Route::get('/{id}',[seatController::class,'show']);
    Route::post('/',[seatController::class,'store']);
    Route::delete('/{id}', [seatController::class,'destroy']);
    Route::put('/',[seatController::class,'update']);
});