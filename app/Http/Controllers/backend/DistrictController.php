<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DistrictController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function district()
    {
   	$district=DB::table('districts')->get();
    	return view('backend.district.index',compact('district'));
    }
    public function insert(Request $request)
    {
    	   $validatedData = $request->validate([
        'district_en' => 'required|unique:districts|max:55',
        'district_bn' => 'required|unique:districts|max:55',
     ]);
     $data=array();
      $data['district_en']=$request->district_en;
      $data['district_bn']=$request->district_bn;
      DB::table('districts')->insert($data);
$notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
  public function destory($id)
  {
  	DB::table('districts')->where('id',$id)->delete();
$notification=array(
          'messege'=>'Successfully Deleted',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
  }

public function edit($id)
{
 $district=DB::table('districts')->where('id',$id)->first();
      return view('backend.district.edit',compact('district'));

  }

  public function update(Request $request,$id)
  {
  	$validatedData = $request->validate([
        'district_en' => 'required|max:55',
        'district_bn' => 'required|max:55',
     ]);
      $data=array();
      $data['district_en']=$request->district_en;
      $data['district_bn']=$request->district_bn;
      DB::table('districts')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('district')->with($notification);
  }

}

