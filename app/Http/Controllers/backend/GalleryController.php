<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class GalleryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function photo()
    {
    	$photo=DB::table('photos')->get();
    	return view('backend.gallery.photos',compact('photo'));
    }

    public function storePhoto(Request $request)
    {
     $validatedData = $request->validate([
        'title' => 'required',
        'type' => 'required',
     ]);

     	   $data=array();
     	   $data['title']=$request->title;
     	   $data['type']=$request->type;
     	   $image=$request->photo;
     	   if($image){
     	   	$image_one=uniqid().'.'.$image->getClientOriginalExtension();
     	   	Image::make($image)->resize(500,300)->save('public/gallery/'.$image_one);
     	   	$data['photo']='public/gallery/'.$image_one;
     	   	DB::table('photos')->insert($data);
     	 $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
     	   	return Redirect()->back()->with($notification);
     	   }else{
     	   	return Redirect()->back();
     	   }
    }

    public function deletePhoto($id)
    {
          $photo=DB::table("photos")->where('id',$id)->first();
           unlink($photo->photo);
          DB::table("photos")->where('id',$id)->delete();
          $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function editPhoto($id)
    {
   $photo=DB::table("photos")->where('id',$id)->first();
   return view('backend.gallery.edit',compact('photo'));
    }

    public function video()
    {
    $video=DB::table('videos')->get();
    return view('backend.gallery.video',compact('video'));
    }

    public function storevideo(Request $request)
    {
      $data=array();
      $data['title']=$request->title;
      $data['embed_code']=$request->embed_code;
      $data['type']=$request->type;
      DB::table('videos')->insert($data);
         $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
          return Redirect()->back()->with($notification);
         }
         public function deleteVideo($id)
         {
          DB::table("videos")->where('id',$id)->delete();
          $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
         }
    }

