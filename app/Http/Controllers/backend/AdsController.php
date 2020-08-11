<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class AdsController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function horizontal()
    {
    	$horizontal=DB::table('ads')->get();
    	return view('backend.ads.horizontal',compact('horizontal'));
    }
    public function storeads(Request $request)
    {
    	$data=array();
    	$data['link']=$request->link;
 if($request->type==2)
 {
   $image=$request->ads;
   $image_one=uniqid().'.'.$image->getClientOriginalExtension();
     	   	Image::make($image)->resize(980,90)->save('public/ads/'.$image_one);
     	   	$data['ads']='public/ads/'.$image_one;
     	   	$data['type']=2;
     	   	DB::table('ads')->insert($data);
     	 $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
                  );
     	   	return Redirect()->back()->with($notification);
 }else{
 	$image=$request->ads;
   $image_one=uniqid().'.'.$image->getClientOriginalExtension();
     	   	Image::make($image)->resize(300,600)->save('public/ads/'.$image_one);
     	   	$data['ads']='public/ads/'.$image_one;
     	   	$data['type']=1;
     	   	DB::table('ads')->insert($data);
     	 $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
                  );
     	   	return Redirect()->back()->with($notification);

 }

    }
}
