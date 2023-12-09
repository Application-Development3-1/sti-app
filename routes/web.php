<?php

use App\Http\Controllers\Api\v1\UsersController;
use App\Http\Controllers\Api\v2\TeachersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeTestController;
use App\Http\Controllers\AuthControllerTeacher;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeTestControllerTeacher;
use App\Http\Controllers\LostItemController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\SampleFeedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Feed;
use App\Models\LostItem;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;
use PHPUnit\Event\Code\Test;

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
    Route::delete('/loginStudent', [AuthController::class, 'logout'])->name('logout');

    
    Route::get('/loginTeacher', [AuthControllerTeacher::class, 'loginteacher'])->name('login2');
    Route::post('/loginTeacher', [AuthControllerTeacher::class, 'loginPostTeacher'])->name('login2');


    Route::get('/studentHomePage', [HomeTestControllerTeacher::class, 'index']);
    Route::delete('/logoutTeacher', [AuthControllerTeacherr::class, 'logoutTeacher'])->name('logout1');




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
    Route::get('/click_adminDelete/{id}', [TeachersController::class, 'deleteTeachers']);

    Route::post('/click_create/{id}', [UsersController::class, 'storeAdmin']);
    Route::post('/click_adminCreate/{id}', [TeachersController::class, 'storeAdmin']);

   


    Route::get('generate_password',[UsersController::class, 'generatePass']);

    Route::post('/studentHomePage', function(){
        $post = new Post();
        $post->image = request('image');
        $post->caption = request('caption');
    });

    Route::get('/post_delete/{id}', [PostController::class, 'deleteStudPost']);

    Route::post('homeStudent', [PostController::class, 'store']);
   
    Route::resource('/studentHomePage', PostController::class);

    
    Route::get('/profile', function () {

        return view('profile');
    });

    
    Route::post('/profile', function(){
        $profile = new Profile();
        $profile->image = request('ProfilePicture');
    });

    Route::get('/profile', function(){
        $profile = DB::table('profile')->get();
        
        return view ('profile');
    });

    Route::post('profile', [ProfileController::class, 'store']);

    Route::resource('/profile', ProfileController::class);

    Route::get('/lostAndFound', function(){
        return view('lostAndFound');
    });

    Route::get('/bulletin', function(){
        return view('bulletin');
    });

    Route::get('/yourGroup', function(){
        return view('yourGroup');
    });

    Route::get('/addlostitem', function(){
        return view('addlostitem');
    });

/* LOST ITEM ROUTE */

    Route::get('/lostAndFound', function(){
        $lost = DB::table('lost_item')->get();
        
        return view ('lostAndFound');
    });

    Route::post('/lostAndFound', function(){
        $lost = new LostItem();
        $lost->what = request('what');
        $lost->when = request('when');
        $lost->where = request('where');
        $lost->additional = request('additional');
        $lost->image = request('image');
    });

    Route::post('lostAndFound', [LostItemController::class, 'store']);
   
    Route::resource('/lostAndFound', LostItemController::class);

    Route::get('/lost_delete/{id}', [LostItemController::class, 'deleteLost']);

    Route::get('teachersHomePage', function(){
        return view('teachersHomePage');
    });

    Route::get('/userSettings', [ChangePasswordController::class, 'index']);
    

  

    


    