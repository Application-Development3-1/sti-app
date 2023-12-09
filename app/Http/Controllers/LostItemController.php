<?php

namespace App\Http\Controllers;
use App\Models\LostItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LostItemController extends Controller
{
    public $num;

    public function lostAndFound(Request $request){
       
        
        foreach($request->image as $value){
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('lost_item_images'), $imageName);
            

            $imageName[] = $imageName;
        }
        
        
        $lost = new LostItem();

        $lost->what = $request->what;
        $lost->what = $request->when;
        $lost->what = $request->where;
        $lost->additional = $request->additional;
        $lost->image = $request->image;
      
        $lost->save();

        $images[] = $lost;
        

        return view ('lostAndFound', compact('data'));

    }


    public function index(){

        $idarray = LostItem::all()->modelKeys();
        $idmax= end($idarray);
        $lost = LostItem::all();

        $reverse= $lost->reverse();
        $reverse->all();

        $user_id =Auth::user()->id;

        return view('lostAndFound', ['lost'=>$reverse]);
   
    }


    public function store(Request $request){
        $request->validate([
            'image'=> 'image|mimes:jpeg,jpg,png|max:5120',
            
        ]);

        $requestData = $request->all();
        

        $fileName = time().$request->file('image')->getClientOriginalName();

        $path =$request->file('image')->storeAs('public/lost_item_images/', $fileName, 'public');

        $userId= $request->input('user_id');

        $requestData["image"] = '/storage/'.$path;
        
        LostItem::create($requestData, $userId);

        return redirect('lostAndFound')->with('message','Post Success!');
    }

    public function deleteLost($id){
        DB::delete('delete from lost_item where id =?', [$id]);
        return redirect('lostAndFound')->with('success', 'Data Deleted');

    }
}
