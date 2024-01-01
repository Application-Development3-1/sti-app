<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostControllerTeacher extends Controller
{
    public $num;

    public function teachersHomePage(Request $request){
       
        
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

        

        return view ('teachersHomePage', compact('data'));

    }


    public function index(){

        $idarray = Post::all()->modelKeys();
        $idmax= end($idarray);
        $post = Post::all();

        $reverse= $post->reverse();
        $reverse->all();
        
        $teacher_id=Auth::id();
        

        
        $profiles = Profile::where('teacher_id', $teacher_id)->latest()->first();

        
        
       return view('teachersHomePage', ['post'=>$reverse], ['profiles'=>$profiles]);
   
    }


    public function store(Request $request){
        $request->validate([
            'image'=> 'image|mimes:jpeg,jpg,png|max:5120',
            
        ]);

        $requestData = $request->all();
        

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path =$request->file('image')->storeAs('public/images/', $fileName, 'public');

        $teacherId = $request->input('teacher_id');

        $requestData["image"] = '/storage/'.$path;
        
        Post::create($requestData, $teacherId);
         

        return redirect('teachersHomePage')->with('message','post success!');
    }

    public function deleteTeachPost($id){
        DB::delete('delete from post where id =?', [$id]);
        return redirect('teachersHomePage')->with('success', 'Data Deleted');

    }
}
