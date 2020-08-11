<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
class ExtraController extends Controller
{
           public function __construct()
    {
        $this->middleware('auth');
    }
    public function english()
    	{
    		Session::get('lang');
    		session()->forget('lang');
    		Session()->put('lang','english');
    		return redirect()->back();

    	}
    public function bangla()
    	{
            Session::get('lang');
    		session()->forget('lang');
    		Session()->put('lang','bangla');
    		return redirect()->back();
    	}
        public function singlepost($id,$slug)
        {
            $post=DB::table('posts')
->join('categories','posts.category_id','categories.id')
->join('subcategories','posts.subcategory_id','subcategories.id')
->join('users','posts.user_id','users.id')
->select('posts.*','categories.category_bn','categories.category_en','subcategories.subcategory_bn','subcategories.subcategory_en','users.name')
->where('posts.id',$id)
->first();

return view('fontend.singlepost',compact('post'));
        }

        public function allpost($id,$subcategory_bn)
        {
            $post=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.name')
            ->where('subcategory_id',$id)->orderBy('id','DESC')->paginate(6);
            return view('fontend.allpost',compact('post'));
        }
        public function allpostcat($id,$category_bn)
        {
             $post=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.name')
            ->where('category_id',$id)->orderBy('id','DESC')->paginate(16);
            return view('fontend.allpost',compact('post'));
        }
          public function getsubdistrict($district_id){


        $subdis=DB::table('subdistricts')->where('district_id',$district_id)->get();
        return response()->json($subdis);
     }
     public function saradeshstore(Request $request)
     {
     $distid=$request->district_id;
     $subdistid=$request->subdistrict_id;

     $post=DB::table('posts')->where('district_id',$distid)->where('subdistrict_id',$subdistid)->join('users','posts.user_id','users.id')
            ->select('posts.*','users.name')->orderBy('id','DESC')->paginate(16);
            return view('fontend.allpost',compact('post'));
     }
}
