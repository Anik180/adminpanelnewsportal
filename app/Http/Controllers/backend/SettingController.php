<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
class SettingController extends Controller
{
          public function __construct()
    {
        $this->middleware('auth');
    }

    public function social()
    {

    	$social=DB::table('socials')->first();
    	return view('backend.setting.social',compact('social'));
    }

    public function update(Request $request,$id)
    {
    	//   $validatedData = $request->validate([
     //    'category_en' => 'required|max:55',
     //    'category_bn' => 'required|max:55',
     // ]);
      $data=array();
      $data['facebook']=$request->facebook;
      $data['twitter']=$request->twitter;
      $data['youtube']=$request->youtube;
      $data['instagram']=$request->instagram;
      $data['linkedin']=$request->linkedin;
      DB::table('socials')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('social.setting')->with($notification);
    }

    public function seo()
    {
    	$seo=DB::table('seos')->first();
    	return view('backend.setting.seo',compact('seo'));
    }

    public function seoupdate(Request $request,$id)
    {
    	      $data=array();
      $data['meta_author']=$request->meta_author;
      $data['meta_title']=$request->meta_title;
      $data['meta_keyword']=$request->meta_keyword;
      $data['meta_description']=$request->meta_description;
      $data['google_analytics']=$request->google_analytics;
      $data['google_verification']=$request->google_verification;
      $data['alexa_analytics']=$request->alexa_analytics;
      DB::table('seos')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }

    public function prayer()
    {
      $prayer=DB::table('namaz')->first();
      return view('backend.setting.prayer',compact('prayer'));
    }

    public function prayerupdate(Request $request,$id)
    {
                  $data=array();
      $data['fajor']=$request->fajor;
      $data['johor']=$request->johor;
      $data['asor']=$request->asor;
      $data['magrib']=$request->magrib;
      $data['esha']=$request->esha;
      $data['jummah']=$request->jummah;
      DB::table('namaz')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }

    public function livetv()
    {
      $livetv=DB::table('livetv')->first();
      return view('backend.setting.livetv',compact('livetv'));
    }

    public function livetvupdate(Request $request,$id)
    {
                        $data=array();
      $data['embed_code']=$request->embed_code;

      DB::table('livetv')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
    public function activetv($id)
    {
       DB::table('livetv')->where('id',$id)->update(['status'=>1]);
       $notification=array(
          'messege'=>'Successfully Successfully Live Tv Deactive',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
      public function deactivetv($id)
    {
           DB::table('livetv')->where('id',$id)->update(['status'=>0]);
       $notification=array(
          'messege'=>'Successfully Live Tv Deactive',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }

    public function notice()
    {
       $notice=DB::table('notices')->first();
      return view('backend.setting.notice',compact('notice'));
    }

    public function noticeUpdate(Request $request,$id)
    {
       $data=array();
      $data['notice']=$request->notice;

      DB::table('notices')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
    public function activenotice($id)
    {
        DB::table('notices')->where('id',$id)->update(['status'=>1]);
       $notification=array(
          'messege'=>'Successfully Successfully notice Deactive',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
      public function deactivenotice($id)
    {
            DB::table('notices')->where('id',$id)->update(['status'=>0]);
       $notification=array(
          'messege'=>'Successfully Successfully notice Deactive',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }

    public function website()
    {
        $website=DB::table('websites')->get();
      return view('backend.setting.website',compact('website'));
    }

    public function store(Request $request)
    {
          $validatedData = $request->validate([
        'website_name' => 'required|unique:websites',
        'website_name_en' => 'required|unique:websites',
        'website_link' => 'required|unique:websites',
     ]);
      $data=array();
      $data['website_name']=$request->website_name;
      $data['website_name_en']=$request->website_name_en;
      $data['website_link']=$request->website_link;
      DB::table('websites')->insert($data);
$notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }

    public function deleteWebsite($id)
    {
      DB::table('websites')->where('id',$id)->delete();
     $notification=array(
          'messege'=>'Successfully Deleted',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }


public function  editWebsite($id)
{
      $website=DB::table('websites')->where('id',$id)->first();
      return view('backend.setting.edit_website',compact('website'));
}

public function websiteupdate(Request $request,$id)
{
        $validatedData = $request->validate([
        'website_name' => 'required',
        'website_name_en' => 'required',
        'website_link' => 'required',
     ]);
      $data=array();
      $data['website_name']=$request->website_name;
      $data['website_name_en']=$request->website_name_en;
      $data['website_link']=$request->website_link;
      DB::table('websites')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('website')->with($notification);
}
public function websetting()
{
  $setting=DB::table('settings')->first();
  return view('backend.setting.web_setting',compact('setting'));
}
public function websitesetting(Request $request,$id)
{
  $data=array();
           $data['phone_bn']=$request->phone_bn;
           $data['phone_en']=$request->phone_en;
           $data['email']=$request->email;
           $data['address_bn']=$request->address_bn;
           $data['address_en']=$request->address_en;
           $image=$request->logo;
           if ($image) {
                $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
                Image::make($image)->resize(120,32)->save('public/ads/'.$image_one);    //   public/postimages/123123.jpg
                $data['logo']='public/ads/'.$image_one;   //   public/postimages/123123.jpg
                 DB::table('settings')->where('id',$id) ->update($data);
                 $notification=array(
                     'messege'=>'Successfully Settings Updated ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
           }
            //jodi image na thake notun vabe
           // $data['image']= $oldimage;
             DB::table('settings')->where('id',$id) ->update($data);
                 $notification=array(
                     'messege'=>'Successfully Settings Updated ',
                     'alert-type'=>'success'
                    );
            return Redirect()->back()->with($notification);
}

}

