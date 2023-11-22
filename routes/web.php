<?php

use App\Http\Controllers\Api\v1\UsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeTestController;
use App\Http\Controllers\AuthControllerTeacher;
use App\Http\Controllers\HomeTestControllerTeacher;
use App\Http\Controllers\Api\v3\PostController;
use App\Models\StudentPost;
use GuzzleHttp\Middleware;

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

/*Route::post('/login/process',[UsersController::class, 'process']);*/ 

/*Route::get('add', [StudentController::class, 'display']);
Route::post('add', [UsersController::class, 'store']);*/



    Route::get('/loginStudent', [AuthController::class, 'login'])->name('login');
    Route::post('/loginStudent', [AuthController::class, 'loginPost'])->name('login');

 

    Route::get('/studentHomePage', [HomeTestController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    
    Route::get('/loginTeacher', [AuthControllerTeacher::class, 'loginteacher'])->name('login2');
    Route::post('/loginTeacher', [AuthControllerTeacher::class, 'loginPostTeacher'])->name('login2');

 

    Route::get('/studentHomePage', [HomeTestControllerTeacher::class, 'index']);
    Route::delete('/logoutTeacher', [AuthControllerTeacherr::class, 'logoutTeacher'])->name('logout');

    
    Route::post('/studentHomePage', function(){
        $studentposts = new StudentPost();
        $studentposts->image = request('image');
        $studentposts->caption = request('caption');
    });

/*

    Route::get('/studentHomePage', [StudentpostController::class, 'create'])->name('studentHomePage.create');*/
    
    Route::post('/studentHomePage', [PostController::class, 'store'])->name('studentHomePage.store');

   Route::get('admin', [UsersController::class, 'records']);

