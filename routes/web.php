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
use App\Http\Controllers\PostController;

use App\Http\Controllers\SampleFeedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Feed;
use App\Models\Post;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;

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

   /* 
    Route::post('/studentHomePage', function(){
        $feeds = new Feed();
        $feeds->image = request('image');
        $feeds->caption = request('caption');
    });
*/
    /*Route::get("students", [FeedController::class, 'studentHomePage']);*/

    Route::get('admin', [UsersController::class, 'records']);

    Route::view('studentHomePage', 'studentHomePage');
    Route::POST('studentHomePage', [PostController::class, 'studentHomePage']);

    Route::get('/studentHomePage', function(){
        $post = DB::table('post')->get();
        
        return view ('studentHomePage');
    });


    Route::get('/click_delete/{id}', [UsersController::class, 'deleteStudent']);

    Route::post('/click_create/{id}', [UsersController::class, 'storeAdmin']);
/*
    Route::post('homeStudent', [FeedController::class, 'store']);
   
    Route::resource('/studentHomePage', FeedController::class);
*/
    Route::get('/profilePage', function(){
        return view ('studentProfile');
    });

    Route::get('generate_password',[UsersController::class, 'generatePass']);

    Route::post('/studentHomePage', function(){
        $post = new Post();
        $post->image = request('image');
        $post->caption = request('caption');
    });

    Route::post('homeStudent', [PostController::class, 'store']);
   
    Route::resource('/studentHomePage', PostController::class);