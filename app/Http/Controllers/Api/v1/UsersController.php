<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

    public function deleteStudent($id){
        DB::delete('delete from users where id = ?', [$id]);
        return redirect('admin')->with('success', 'Data Deleted');

    }

    public function storeAdmin(Request $request){

       
        
       $user = User::create([
        'studentID'=>$request->studentID,
        'first_name'=>$request->FirstName,
        'last_name'=>$request->LastName,
        'middle_name'=>$request->MiddleName,
        'course'=>$request->Course,
        'email'=>$request->Email,
        'password'=>Hash::make($request->Password),

       ]);
    
       if(!$user){
        return redirect('admin')->with('error', 'unsuccessful');
       }
       return redirect('admin')->with('success', 'Data Succesfully Created');
    }


    public function update(){
        
    }
  

   
}
