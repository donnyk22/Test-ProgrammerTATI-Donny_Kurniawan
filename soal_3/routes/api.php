<?php

use App\Http\Controllers\ProvinceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/provinsi', [ProvinceController::class, 'get']);
Route::get('/provinsi/{id}', [ProvinceController::class, 'get']);
Route::post('/provinsi', [ProvinceController::class, 'post']);
Route::put('/provinsi/{id}', [ProvinceController::class, 'put']);
Route::delete('/provinsi/{id}', [ProvinceController::class, 'delete']);