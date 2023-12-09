<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;


use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index(){

        $user_id=Auth::user()->id;

        $profiles = Profile::where('user_id', $user_id)->latest()->first();

        $user_id = Auth::user();
        $timeline = Post::all()->where('user_id', Auth::user()->id);

        return view('profile', ['profiles'=>$profiles], compact('timeline'));
    }

    public function profile(Request $request){

        foreach($request->image as $value){
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('profile'), $imageName);
            

            $imageName[] = $imageName;
        }

        $profile = new Profile();

        $profile->image = $request->image;  
        $profile->user_id = $request->user_id;   
        $profile->save();
        
        $images[] = $profile;

        return view ('/profile', compact('data'));

    }

    public function store(Request $request){
        $request->validate([
            'ProfilePicture'=> 'image|mimes:jpeg,jpg,png|max:5120',
            
        ]);

        $requestData = $request->all();

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path =$request->file('image')->storeAs('public/profiles/', $fileName, 'public');

        $requestData["ProfilePicture"] = '/storage/'.$path;

        Profile::create($requestData);

        return redirect('profile')->with('message','Profile Update Complete!');
    }

    
    
}
