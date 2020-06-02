<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Auth;
class PostController extends Controller
{
          public function __construct()
    {
        $this->middleware('auth');
    }

// all post show here
    public function index()
    {
$post=DB::table('posts')
->join('categories','posts.category_id','categories.id')
->join('subcategories','posts.subcategory_id','subcategories.id')
->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
// ->where('user_id',Auth::id());
->get();

return view('backend.post.index',compact('post'));
    }
    // post insert form
    public function create()
    {
   $category=DB::table('categories')->get();
   $district=DB::table('districts')->get();

   return view('backend.post.create',compact('category','district'));
    }
    //store post
    public function store(Request $request)
    {
 $validatedData = $request->validate([
        'category_id' => 'required',
        'district_id' => 'required',
     ]);

     	   $data=array();
     	   $data['title_bn']=$request->title_bn;
     	   $data['title_en']=$request->title_en;
     	   $data['user_id']=Auth::id();
     	   $data['category_id']=$request->category_id;
     	   $data['subcategory_id']=$request->subcategory_id;
     	   $data['district_id']=$request->district_id;
     	   $data['subdistrict_id']=$request->subdistrict_id;
     	 
     	   $data['detail_en']=$request->detail_en;
     	   $data['detail_bn']=$request->detail_bn;
     	   $data['tag_en']=$request->tag_en;
     	   $data['tag_bn']=$request->tag_bn;
     	   $data['headline']=$request->headline;
     	   $data['first_section']=$request->first_section;
     	   $data['first_section_thumbnail']=$request->first_section_thumbnail;
     	   $data['bigthumbnail']=$request->bigthumbnail;
     	   $data['post_date']=date('d-m-Y');
     	   $data['post_month']=date('F');

     	   $image=$request->image;
     	   if($image){
     	   	$image_one=uniqid().'.'.$image->getClientOriginalExtension();
     	   	Image::make($image)->resize(500,300)->save('public/postimage/'.$image_one);
     	   	$data['image']='public/postimage/'.$image_one;
     	   	DB::table('posts')->insert($data);
     	 $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
     	   	return Redirect()->back()->with($notification);
     	   }else{
     	   	return Redirect()->back();
     	   }

    }
public function delete($id)
{
    $post=DB::table("posts")->where('id',$id)->first();
    unlink($post->image);
    DB::table("posts")->where('id',$id)->delete();
     $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
}
public function edit($id)
{

$post=DB::table("posts")->where('id',$id)->first();
 $category=DB::table('categories')->get();
 $district=DB::table('districts')->get();
return view('backend.post.edit',compact('post','category','district'));
}
public function update(Request $request,$id)
{
    $validatedData = $request->validate([
        'category_id' => 'required',
        'district_id' => 'required',
     ]);

           $data=array();
           $data['title_bn']=$request->title_bn;
           $data['title_en']=$request->title_en;
           $data['category_id']=$request->category_id;
           $data['subcategory_id']=$request->subcategory_id;
           $data['district_id']=$request->district_id;
           $data['subdistrict_id']=$request->subdistrict_id;         
           $data['detail_en']=$request->detail_en;
           $data['detail_bn']=$request->detail_bn;
           $data['tag_en']=$request->tag_en;
           $data['tag_bn']=$request->tag_bn;
           $data['headline']=$request->headline;
           $data['first_section']=$request->first_section;
           $data['first_section_thumbnail']=$request->first_section_thumbnail;
           $data['bigthumbnail']=$request->bigthumbnail;
         
           $oldimage=$request->oldimage;
           $image=$request->image;
           if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('public/postimage/'.$image_one);
            $data['image']='public/postimage/'.$image_one;
            DB::table('posts')->where('id',$id)->update($data);
            unlink($oldimage);
         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->route('all.post')->with($notification);
           }
            $data['image']=$oldimage;
             DB::table('posts')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->route('all.post')->with($notification);
           }

    

    //json data return
    public function getsubcategory($category_id)
     {

     	$sub=DB::table('subcategories')->where('category_id',$category_id)->get();
     	return response()->json($sub);
     }
     public function getsubdistrict($district_id){


     	$subdis=DB::table('subdistricts')->where('district_id',$district_id)->get();
     	return response()->json($subdis);
     }

}
