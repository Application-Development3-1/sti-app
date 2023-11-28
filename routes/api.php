<?php

use App\Http\Controllers\Api\v1\UsersController;
use App\Http\Controllers\Api\v2\TeachersController;
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

Route::get('v1/users', [UsersController::class, 'index']);
Route::post('v1/users', [UsersController::class, 'store']);

Route::get('v2/teachers', [TeachersController::class, 'index']);
Route::post('v2/teachers', [TeachersController::class, 'store']);


   
   


