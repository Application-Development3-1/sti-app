<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
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

        /*specific post for user*/
        

        return view ('studentHomePage', compact('data'));

    }


    public function index(){

        $idarray = Post::all()->modelKeys();
        $idmax= end($idarray);
        $post = Post::all();

        $reverse= $post->reverse();
        $reverse->all();

        $user_id=Auth::user()->id;
        
        $profiles = Profile::where('user_id', $user_id)->latest()->first();


       /* $feedpost = Feed::where('id', $idmax)->get();*/
        
        
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

    /*public function innerJoin(){
        $result = DB::table('users')
        ->join('post', 'users.id', '=', 'post.user_id')
        ->select('users.first_name','post.user_id')
        ->get();


    }*/
    
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