<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;


class PostController extends Controller{
    /*public function AddSample(Request $request){
        $feed = new Feed();
        $feed->caption = $request->caption;
        $feed->image = $request->image;
        $feed->save();
        return redirect('add');

    }
*/
    public $num;

    public function studentHomePage(Request $request){
        $request->validate([
            'image'=> 'image|mimes:jpeg,jpg,png|max:5120'
        ]);
        
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
        /*return redirect('studentHomePage');*/

    }

    public function index(){

        $idarray = Post::all()->modelKeys();
        $idmax= end($idarray);
        $post = Post::all();
        $reverse= $post->reverse();
        $reverse->all();
        

       /* $feedpost = Feed::where('id', $idmax)->get();*/
        
        
       return view('studentHomePage', ['post'=>$reverse]);
   
    }

    public function store(Request $request){

        $requestData = $request->all();
        

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path =$request->file('image')->storeAs('public/images/', $fileName, 'public');

        $requestData["image"] = '/storage/'.$path;

        
        Post::create([
            $requestData,
            'user_id'=>Auth::user()->id,
            'caption' => $request->input('caption'),
         


        ]);
        

        return redirect('studentHomePage')->with('message','Post Success!');
    }
    
}



/*
class FeedController extends Controller
{
    public function index(){

        $feeds = Feed::all();

        return response()->json([
            'feedpost' => $feeds
        ]);
   
    }

    public function store(StorePostRequest $request){
        $image = $request->input('image');
        $caption = $request->input('caption');

        $feed = new Feed();
        $feed->image = $image;
        $feed->caption = $caption;
        $feed->save();

        
        return response()->json([
            'feedpost' => $feed
        ]);
    }

    public function create(){
        return view ('students.studentHomePage');
    }


}
*/