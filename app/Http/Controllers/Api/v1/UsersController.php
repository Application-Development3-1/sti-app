<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Session;
use validator;

use function Laravel\Prompts\alert;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json([
            'users' => $users
        ]);
    }

    public function store(StoreUserRequest $request)
    {
       
            /*kukunin yung keys na nilagay sa javascript request */
            
        $studentID = $request->input('studentID');
        $firstname = $request->input('first_name');
        $lastname = $request->input('last_name');
        $middlename = $request->input('middle_name');
        $course = $request->input('course');
        $email = $request->input('email');
        $password = $request->input('password');
       
        

        $user = new User();
                /*column name-variable name */
        $user->studentID = $studentID;
        $user->course = $course;
        $user->first_name = $firstname;
        $user->last_name = $lastname;
        $user->middle_name = $middlename;
        $user->email = $email;
        $user->password = Hash::make($password);
       
        $user->save();

        return response()->json([
            'users' => $user
        ]);
    }

    public function records(){
      $users = User::all();
      
      return view('admin', compact('users'));
    }

   
}
