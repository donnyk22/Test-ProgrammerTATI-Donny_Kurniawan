<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login/action', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/', [DashboardController::class, 'view'])->middleware('isLogin');

Route::get('/post/new', [PostController::class, 'new'])->middleware('isLogin');
Route::post('/post/save', [PostController::class, 'save'])->middleware('isLogin');
Route::put('/post/save/{id}', [PostController::class, 'save'])->middleware('isLogin');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->middleware('isLogin');
Route::delete('/post/delete/{id}', [PostController::class, 'delete'])->middleware('isLogin');
Route::get('/post/approve/{id}', [PostController::class, 'approve'])->middleware('isLogin');
Route::get('/post/reject/{id}', [PostController::class, 'reject'])->middleware('isLogin');