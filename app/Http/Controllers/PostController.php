<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class PostController extends Controller{

    public $num;

    public function studentHomePage(Request $request){
       
        
        foreach($request->image as $value){
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('images'), $imageName);
            

            $imageName[] = $imageName;
        }
        
        
        $post = new Post();
       

        $post->caption = $request->caption;
        $post->image = $request->image;
      
        $post->save();

        $images[] = $post;

        

        return view ('studentHomePage', compact('data'));

    }


    public function index(Request $request){

        $idarray = Post::all()->modelKeys();
        $idmax= end($idarray);
        $post = Post::all();
        
        

        $reverse= $post->reverse();
        $reverse->all();

        $users = Auth::user()->id;
        
        $profiles = Profile::where('user_id', $users)->latest()->first();

        
        
       return view('studentHomePage', ['post'=>$reverse], ['profiles'=>$profiles]);
   
    }
  


    public function store(Request $request){
        $request->validate([
            'image'=> 'image|mimes:jpeg,jpg,png|max:5120',
            
        ]);

        $requestData = $request->all();
        

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path =$request->file('image')->storeAs('public/images/', $fileName, 'public');

        $userId= $request->input('user_id');

        $requestData["image"] = '/storage/'.$path;
        
        Post::create($requestData, $userId);
         

        return redirect('studentHomePage')->with('message','Post Success!');
    }

    public function deleteStudPost($id){
        DB::delete('delete from post where id =?', [$id]);
        return redirect('studentHomePage')->with('success', 'Data Deleted');

    }
    
}

