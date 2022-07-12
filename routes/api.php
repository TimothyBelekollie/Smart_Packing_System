<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VehicleController;
use App\Http\Controllers\API\CardController;
use App\Http\Controllers\API\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('vehicles',VehicleController::class);
Route::apiResource('cards',CardController::class);
Route::apiResource('payments',PaymentController::class);
Route::post('/payment_id',[App\Http\Controllers\API\PaymentController::class,'StoreEdit']);

