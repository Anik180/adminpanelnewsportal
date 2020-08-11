<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function adduser()
    {
        return view('backend.role.adduser');
    }

    public function storeuser(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
        $data['role']=$request->role;
        $data['more_setting']=$request->more_setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['type']=$request->type;

        DB::table('users')->insert($data);
        $notification=array(
        'messege'=>'Successfully Added',
        'alert-type'=>'success'
                  );
        return Redirect()->back()->with($notification);
    }

    public function alluser()
    {
        $all=DB::table('users')->where('type',0)->get();
        return view('backend.role.index',compact('all'));
    }
    public function editUser($id)
    {
        $edit=DB::table('users')->where('id',$id)->first();
        return view('backend.role.edit',compact('edit'));
    }
    public function updateUser(Request $request,$id)
    {
          $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['category']=$request->category;
        $data['district']=$request->district;
        $data['post']=$request->post;
        $data['role']=$request->role;
        $data['more_setting']=$request->more_setting;
        $data['gallery']=$request->gallery;
        $data['ads']=$request->ads;
        $data['type']=$request->type;
         DB::table('users')->where('id',$id)->update($data);
        $notification=array(
        'messege'=>'Successfully update',
        'alert-type'=>'success'
                  );
        return Redirect()->route('all.user')->with($notification);  
    }
}
