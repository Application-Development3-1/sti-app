<?php

namespace App\Http\Controllers;
 
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthControllerTeacher extends Controller
{
 
    public function loginteacher()
    {
        return view('loginTeacher');
    }
    public function loginPostTeacher(Request $request)
    {
        $credetials = [
            'email' => $request->email2,
            'password' => $request->password2,
        ];
 
        if (Auth::guard('teacher')->attempt($credetials)) {
            return redirect('/teachersHomePage')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Invalid Email or Password!');
    }
 
    public function logoutTeacher()
    {
        Auth::guard('teacher')->logout();
 
        return redirect('/loginTeacher');
    }
    
}