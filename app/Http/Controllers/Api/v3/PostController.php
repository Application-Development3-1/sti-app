<?php

namespace App\Http\Controllers\Api\v3;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\StudentPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
     /*
    public function create(){
        return view ('studentHomePage');
    }

    public function store(Request $request){
        
        $content = $request->file('image')->getSize();
        $image = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/', $image);

        $photo = new StudentPost();
        $photo->image = $image;
        $photo->content = $content;
        $photo->save();
        return redirect()->back();
    }
    */
    public function index()
    {
        $studentposts = StudentPost::all();

        return response()->json([
            'student_posts' => $studentposts
        ]);
    }



     public function create(){
        return view ('studentposts.student');
     }

     

    public function store(StorePostRequest $request){
        
        
       /* $captions = $request->input('caption');
        $images= $request->input('image');*/

        $post = new StudentPost();

        $post->caption = $request->caption;
        $post->image = $request->image;

        $post->save();
        

        return response()-> json([
            'student_posts' => $post
        ]);
    }

}
