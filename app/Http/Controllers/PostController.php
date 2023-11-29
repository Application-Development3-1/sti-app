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
        /*return redirect('studentHomePage');*/

    }

    public function index(){

        $idarray = Post::all()->modelKeys();
        $idmax= end($idarray);
        $post = Post::all();
        $reverse= $post->reverse();
        $reverse->all();
        

       /* $feedpost = Feed::where('id', $idmax)->get();*/
        
        
       return view('studentHomePage', ['post'=>$reverse], compact('idarray'));
   
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

        
       /* $fileName = $request->file("image")->getClientOriginalName();
        $userId = Auth::user()->id;
        $caption = $request->input('caption');

        $request->file('image')->storeAs('public/images', $fileName);
        $post = new Post();

        $post->image = $fileName;
        $post->caption = $caption;
        $post->user_id = $userId;
       

        $post->save();*/
         

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