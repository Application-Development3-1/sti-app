<?php

use App\Http\Controllers\Api\v1\UsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', [HomeController::class, 'index']);
/*Route::get('/views/loginStudent', [HomeController::class, 'studentLogin']);*/

Route::get('/loginStudent', function () {
    return view('loginStudent');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/loginTeacher', function () {
    return view('loginTeacher');
});

Route::get('/registrationTeacher', function () {
    return view('registrationTeacher');
});

Route::get('/studentHomePage', function () {
    return view('studentHomePage');
});

Route::get('/registrationStudent', function(){
    return view('registrationStudent');
});


Route::get('add', [StudentController::class, 'display']);
Route::post('add', [UsersController::class, 'store']);

