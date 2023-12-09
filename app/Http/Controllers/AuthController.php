<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
 
    public function login()
    {
        return view('loginStudent');
    }
    public function loginPost(Request $request)
    {
        
        $credetials = [
            'studentID' => $request->email,
            'password' => $request->password,
        ];
        


        if (Auth::attempt($credetials)) {
            

            return redirect('/studentHomePage')->with('success', 'Login Success');
        }
 

        return back()->with('error', 'Invalid StudentID or Password!');
    }
 
    public function logout()
    {
        auth()->logout();
        return redirect()->route('/loginStudent');;
    }
    
}