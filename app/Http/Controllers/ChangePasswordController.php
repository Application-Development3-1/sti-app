<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('/userSettings');
    }
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function changePassword(Request $request){
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string',  'confirmed']
        ]);

        $current_passwordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($current_passwordStatus){

            User::findorFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]); 

            return redirect()->back()->with('message', 'Password Updated Successfully');
        }else{
            return redirect()->back()->with('message', 'Current Password does not match with old Password');
        }
    }


}
