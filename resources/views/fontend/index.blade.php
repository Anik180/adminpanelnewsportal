@extends('layouts.font');
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">
   .scrollbar-deep-purple::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #F5F5F5;
   border-radius: 10px; }
   .scrollbar-deep-purple::-webkit-scrollbar {
   width: 12px;
   background-color: #F5F5F5; }
   .scrollbar-deep-purple::-webkit-scrollbar-thumb {
   border-radius: 10px;
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #512da8; }
   .scrollbar-deep-purple {
   scrollbar-color: #512da8 #F5F5F5;
   }
   .scrollbar-cyan::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #F5F5F5;
   border-radius: 10px; }
   .scrollbar-cyan::-webkit-scrollbar {
   width: 12px;
   background-color: #F5F5F5; }
   .scrollbar-cyan::-webkit-scrollbar-thumb {
   border-radius: 10px;
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #00bcd4; }
   .scrollbar-cyan {
   scrollbar-color: #00bcd4 #F5F5F5;
   }
   .scrollbar-dusty-grass::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #F5F5F5;
   border-radius: 10px; }
   .scrollbar-dusty-grass::-webkit-scrollbar {
   width: 12px;
   background-color: #F5F5F5; }
   .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
   border-radius: 10px;
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
   background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }
   .scrollbar-ripe-malinka::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-color: #F5F5F5;
   border-radius: 10px; }
   .scrollbar-ripe-malinka::-webkit-scrollbar {
   width: 12px;
   background-color: #F5F5F5; }
   .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
   border-radius: 10px;
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
   background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }
   .bordered-deep-purple::-webkit-scrollbar-track {
   -webkit-box-shadow: none;
   border: 1px solid #512da8; }
   .bordered-deep-purple::-webkit-scrollbar-thumb {
   -webkit-box-shadow: none; }
   .bordered-cyan::-webkit-scrollbar-track {
   -webkit-box-shadow: none;
   border: 1px solid #00bcd4; }
   .bordered-cyan::-webkit-scrollbar-thumb {
   -webkit-box-shadow: none; }
   .square::-webkit-scrollbar-track {
   border-radius: 0 !important; }
   .square::-webkit-scrollbar-thumb {
   border-radius: 0 !important; }
   .thin::-webkit-scrollbar {
   width: 6px; }
   .example-1 {
   position: relative;
   overflow-y: scroll;
   height: 300px; }
</style>
@php
$big=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
$Small=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(8)->get();
$category=DB::table('categories')->first();
$social=DB::table('socials')->first();
@endphp
<!-- Feature post -->
<section class="bg0">
   <div class="container">
      <div class="row m-rl--1">
         @php
         $slug=preg_replace('/\s+/u','-',trim($big->title_bn));
         @endphp
         <div class="col-md-6 p-rl-1 p-b-2">
            <div class="bg-1 size-a-3 how1 pos-relative" style="background-image: url('{{asset($big->image)}}'); background-position: center; background-size: cover;">
               <a href="{{URL::to('view-post/'.$big->id.'/'.$slug)}}" class="dis-block how1-child1 trans-03"></a>
               <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                  <a href="" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                  fjhjh
                  </a>
                  <h3 class="how1-child2 m-t-14 m-b-10">
                     <a href="{{URL::to('view-post/'.$big->id.'/'.$slug)}}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                     @if(session()->get('lang')== 'english')
                     {{ $big->title_en }}
                     @else
                     {{ $big->title_bn}}
                     @endif
                     </a>
                  </h3>
                  <span class="how1-child2">
                  <span class="f1-s-4 cl11">
                  Jack Sims
                  </span>
                  <span class="f1-s-3 cl11 m-rl-3">
                  -
                  </span>
                  <span class="f1-s-3 cl11">
                  Feb 16
                  </span>
                  </span>
               </div>
            </div>
         </div>
         <div class="col-md-6 p-rl-1">
            <div class="row m-rl--1">
               <div class="col-12 p-rl-1 p-b-2">
                  <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{asset('public/fontend/images/post-02.jpg')}});">
                     <a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>
                     <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                        Culture
                        </a>
                        <h3 class="how1-child2 m-t-14">
                           <a href="blog-detail-01.html" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                           London ipsum dolor sit amet, consectetur adipiscing elit.
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               @foreach($Small as $row)
               @php
               $slug=preg_replace('/\s+/u','-',trim($row->title_bn));
               @endphp
               <div class="col-sm-6 p-rl-1 p-b-2">
                  <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{asset($row->image)}});">
                     <a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}" class="dis-block how1-child1 trans-03"></a>
                     <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                        Life Style
                        </a>
                        <h3 class="how1-child2 m-t-14">
                           <a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                           @if(session()->get('lang')== 'english')
                           {{ $row->title_en }}
                           @else
                           {{ $row->title_bn}}
                           @endif
                           </a>
                        </h3>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Post -->
<section class="bg0 p-t-70">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-10 col-lg-8">
            <div class="p-b-20">
               <!-- Entertainment -->
               <div class="tab01 p-b-20">
                  @php
                  $firstcat=DB::table('categories')->first();
                  $firstcatpostbig=DB::table('posts')->where('category_id',$firstcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
                  $firstcatpostsmall=DB::table('posts')->where('category_id',$firstcat->id)->where('bigthumbnail',NULL)->limit(3)->get();
                  @endphp
                  <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                     <!-- Brand tab -->
                     <h3 class="f1-m-2 cl12 tab01-title">
                        @if(session()->get('lang')== 'english')
                        {{ $firstcat->category_en }}
                        @else
                        {{ $firstcat->category_bn}}
                        @endif
                     </h3>
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab"  role="tab">All</a>
                        </li>
                     </ul>
                     <!--  -->
                     <a href="{{URL::to('post/'.$firstcat->id.'/'.$firstcat->category_bn)}}" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                     @if(session()->get('lang')== 'english')
                     More
                     @else
                     আরও
                     @endif
                     <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                     </a>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content p-t-35">
                     <!-- - -->
                     <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                        <div class="row">
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->	
                              <div class="m-b-30">
                                 <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                 <img src="{{ asset($firstcatpostbig->image)}}" alt="IMG">
                                 </a>
                                 <div class="p-t-20">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$firstcatpostbig->title_en}}
                                       @else
                                       {{$firstcatpostbig->title_bn}}
                                       @endif 
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    Music
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    Feb 18
                                    </span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->	
                              @foreach($firstcatpostsmall as $row)
                              <div class="flex-wr-sb-s m-b-30">
                                 <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                 <img src="{{asset($row->image)}}" alt="IMG">
                                 </a>
                                 <div class="size-w-2">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$row->title_en}}
                                       @else
                                       {{$row->title_bn}}
                                       @endif
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                    Music
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    {{$row->post_date}}
                                    </span>
                                    </span>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Business -->
               <div class="tab01 p-b-20">
                  @php
                  $secondcat=DB::table('categories')->skip(1)->first();
                  $secondcatpostbig=DB::table('posts')->where('category_id',$secondcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
                  $secondcatpostsmall=DB::table('posts')->where('category_id',$secondcat->id)->where('bigthumbnail',NULL)->limit(3)->get();
                  @endphp
                  <div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                     <!-- Brand tab -->
                     <h3 class="f1-m-2 cl13 tab01-title">
                        @if(session()->get('lang')== 'english')
                        {{$secondcat->category_en}}
                        @else
                        {{$secondcat->category_bn}}
                        @endif 
                     </h3>
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#tab2-1" role="tab">All</a>
                        </li>
                     </ul>
                     <!--  -->
                     <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                     @if(session()->get('lang')== 'english')
                     More
                     @else
                     আরও
                     @endif
                     <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                     </a>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content p-t-35">
                     <!-- - -->
                     <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                        <div class="row">
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->	
                              <div class="m-b-30">
                                 <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                 <img src="{{asset($secondcatpostbig->image)}}" alt="IMG">
                                 </a>
                                 <div class="p-t-20">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$secondcatpostbig->title_en}}
                                       @else
                                       {{$secondcatpostbig->title_bn}}
                                       @endif
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    Finance
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    Feb 18
                                    </span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->	
                              @foreach($secondcatpostsmall as $row)
                              <div class="flex-wr-sb-s m-b-30">
                                 <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                 <img src="{{asset($row->image)}}" alt="IMG">
                                 </a>
                                 <div class="size-w-2">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$row->title_en}}
                                       @else
                                       {{$row->title_bn}}
                                       @endif
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                    {{$row->category_id}}
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    {{$row->post_date}}
                                    </span>
                                    </span>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Travel -->
               <div class="tab01 p-b-20">
                  @php
                  $thirdcat=DB::table('categories')->skip(2)->first();
                  $thirdcatpostbig=DB::table('posts')->where('category_id',$thirdcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
                  $thirdcatpostsmall=DB::table('posts')->where('category_id',$thirdcat->id)->where('bigthumbnail',NULL)->limit(3)->get();
                  @endphp
                  <div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                     <!-- Brand tab -->
                     <h3 class="f1-m-2 cl14 tab01-title">
                        @if(session()->get('lang')== 'english')
                        {{$thirdcat->category_en}}
                        @else
                        {{$thirdcat->category_bn}}
                        @endif
                     </h3>
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#tab3-1" role="tab">All</a>
                        </li>
                     </ul>
                     <!--  -->
                     <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                     @if(session()->get('lang')== 'english')
                     More
                     @else
                     আরও
                     @endif
                     <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                     </a>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content p-t-35">
                     <!-- - -->
                     <div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
                        <div class="row">
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->	
                              <div class="m-b-30">
                                 <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                                 <img src="{{asset($thirdcatpostbig->image)}}" alt="IMG">
                                 </a>
                                 <div class="p-t-20">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$thirdcatpostbig->title_en}}
                                       @else
                                       {{$thirdcatpostbig->title_bn}}
                                       @endif 
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                    Hotels
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    {{$row->post_date}}
                                    </span>
                                    </span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-6 p-r-25 p-r-15-sr991">
                              <!-- Item post -->
                              @foreach($thirdcatpostsmall as $row)	
                              <div class="flex-wr-sb-s m-b-30">
                                 <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
                                 <img src="{{asset($row->image)}}" alt="IMG">
                                 </a>
                                 <div class="size-w-2">
                                    <h5 class="p-b-5">
                                       <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                                       @if(session()->get('lang')== 'english')
                                       {{$row->title_en}}
                                       @else
                                       {{$row->title_bn}}
                                       @endif
                                       </a>
                                    </h5>
                                    <span class="cl8">
                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                    Beachs
                                    </a>
                                    <span class="f1-s-3 m-rl-3">
                                    -
                                    </span>
                                    <span class="f1-s-3">
                                    {{$row->post_date}}
                                    </span>
                                    </span>
                                 </div>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @php
         $popular=DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(5)->get();
         @endphp
         <div class="col-md-10 col-lg-4">
            <div class="p-l-10 p-rl-0-sr991 p-b-20">
               <!--  -->
               <div>
                  <div class="how2 how2-cl4 flex-s-c">
                     <h3 class="f1-m-2 cl3 tab01-title">
                        @if(session()->get('lang')=='english')
                        Most Popular 
                        @else
                        জনপ্রিয়
                        @endif 
                     </h3>
                  </div>
                  @php 
                  $sl=1;
                  @endphp
                  <ul class="p-t-35">
                     @foreach($popular as $row)
                     <li class="flex-wr-sb-s p-b-22">
                        <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                           {{$sl++}}
                        </div>
                        <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                        @if(session()->get('lang')=='english')
                        {{$row->title_en}} 
                        @else
                        {{$row->title_bn}} 
                        @endif
                        </a>
                     </li>
                     @endforeach
                  </ul>
               </div>
               <!--  -->
               @php
               $prayer=DB::table('namaz')->first();
               @endphp
               <div class=" p-t-8">
                  <div class="how2 how2-cl4 flex-s-c">
                     <h3 class="f1-m-2 cl3 tab01-title">
                        @if(session()->get('lang')=='english')
                        Prayer Time
                        @else
                        নামাজের সময়
                        @endif
                     </h3>
                  </div>
                  <table class="table">
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Fajr
                           @else
                           ফজর
                           @endif
                        </th>
                        <th>{{$prayer->fajor}}</th>
                     </tr>
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Johor
                           @else
                           যোহর
                           @endif
                        </th>
                        <th>{{$prayer->johor}}</th>
                     </tr>
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Asor
                           @else
                           আসর
                           @endif
                        </th>
                        <th>{{$prayer->asor}}</th>
                     </tr>
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Magrib
                           @else
                           মাগরিব
                           @endif
                        </th>
                        <th>{{$prayer->magrib}}</th>
                     </tr>
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Esha
                           @else
                           ইশা
                           @endif
                        </th>
                        <th>{{$prayer->esha}}</th>
                     </tr>
                     <tr>
                        <th>
                           @if(session()->get('lang')=='english')
                           Jummah
                           @else
                           জুম্মা
                           @endif
                        </th>
                        <th>{{$prayer->jummah}}</th>
                     </tr>
                  </table>
               </div>
               <!--  -->
               <div class="p-t-50">
                  <div class="how2 how2-cl4 flex-s-c">
                     <h3 class="f1-m-2 cl3 tab01-title">
                        @if(session()->get('lang')=='english')
                        Stay Connected
                        @else
                        যোগাযোগ 
                        @endif
                     </h3>
                  </div>
                  <ul class="p-t-35">
                     <div class="row">
                        <li class="flex-wr-sb-c p-b-20 col-md-6">
                           <a href="{{$social->facebook}}" target="-blank" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="flex-wr-sb-c p-b-20 col-md-6">
                           <a href="{{$social->twitter}}" target="-blank"  class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                     </div>
                     <div class="row">
                        <li class="flex-wr-sb-c p-b-20 col-md-6">
                           <a href="{{$social->instagram}}" target="-blank" class="size-a-8 flex-c-c borad-3 size-a-8  fs-16 cl0 hov-cl0" style="background-color: #3F729B">
                           <span class="fab fa-instagram"></span>
                           </a>
                        </li>
                        <li class="flex-wr-sb-c p-b-20 col-md-6">
                           <a href="{{$social->linkedin}}" target="-blank" class="size-a-8 flex-c-c borad-3 size-a-8  fs-16 cl0 hov-cl0" style="background-color: #007BB6">
                           <span class="fab fa-linkedin"></span>
                           </a>
                        </li>
                     </div>
                     <div class="row">
                        <li class="flex-wr-sb-c p-b-20 col-md-6">
                           <a href="{{$social->youtube}}" target="-blank" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                           <span class="fab fa-youtube"></span>
                           </a>
                        </li>
                     </div>
                  </ul>
               </div>
               @php
               $website=DB::table('websites')->get();
               @endphp
               <div class="p-t-50">
                  <div class="how2 how2-cl4 flex-s-c">
                     <h3 class="f1-m-2 cl3 tab01-title">
                        @if(session()->get('lang')=='english')
                        Important website
                        @else
                        গুরুত্বপূর্ণ ওয়েবসাইট
                        @endif
                     </h3>
                  </div>
                  <table class="table">
                     <tbody>
                        @foreach($website as $row)
                        <tr>
                           <th><i class="fas fa-check-square"></i></th>
                           <td>
                              <h4 class="hov-cl10"><a href="{{$row->website_link}}" target="_blank" class="hov-cl10 text-light btn btn-md btn-success">
                                 @if(session()->get('lang')=='english')
                                 {{$row->website_name_en}}
                                 @else
                                 {{$row->website_name}}
                                 @endif
                                 </a>
                              </h4>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Banner -->
@php
$horizontal2=DB::table('ads')->where('type',2)->skip(1)->first();
@endphp
<div class="container">
   <div class="flex-c-c">
      @if($horizontal2==NULL)
      @else
      <a href="{{$horizontal2->link}}">
      <img class="max-w-full" src="{{asset($horizontal2->ads)}}" alt="IMG">
      </a>
      @endif
   </div>
</div>
@php
$latest=DB::table('posts')->orderBy('id','DESC')->limit(6)->get();
@endphp
<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-10 col-lg-8 p-b-20">
            <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
               <h3 class="f1-m-2 cl3 tab01-title">
                  @if(session()->get('lang')=='english')
                  Latest 
                  @else
                  সর্বশেষ
                  @endif 
               </h3>
            </div>
            <div class="row p-t-35">
               @foreach($latest as $row)
               <div class="col-sm-6 p-r-25 p-r-15-sr991">
                  <!-- Item latest -->	
                  <div class="m-b-45">
                     <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
                     <img src="{{asset($row->image)}}" alt="IMG">
                     </a>
                     <div class="p-t-16">
                        <h5 class="p-b-5">
                           <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                           @if(session()->get('lang')=='english')
                           {{$row->title_en}} 
                           @else
                           {{$row->title_bn}}
                           @endif 
                           </a>
                        </h5>
                        <span class="cl8">
                        <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                        by 
                        </a>
                        <span class="f1-s-3 m-rl-3">
                        -
                        </span>
                        <span class="f1-s-3">
                        {{$row->post_date}}
                        </span>
                        </span>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
         <div class="col-md-10 col-lg-4">
            <div class="p-l-10 p-rl-0-sr991 p-b-20">
               <!-- Video -->
               @php 
               $tv=DB::table('livetv')->first();
               @endphp
               @if($tv->status==1)
               <div class="p-b-55">
                  <div class="how2 how2-cl4 flex-s-c m-b-35">
                     <h3 class="f1-m-2 cl3 tab01-title">
                        Live Tv
                     </h3>
                  </div>
                  <div>
                     <div class="wrap-pic-w pos-relative p-r-25">
                        {!!$tv->embed_code!!}
                     </div>
                  </div>
               </div>
               @endif
          @php
        $vertical1=DB::table('ads')->where('type',1)->first();
        @endphp
               <div class="flex-c-s p-b-50">
                     @if($vertical1==NULL)
                       @else
                     <a href="{{$vertical1->link}}">
                        <img class="max-w-full" src="{{asset($vertical1->ads)}}" alt="IMG">
                     </a>
                     @endif
                  </div>

            </div>
         </div>
      </div>
   </div>
</section>
@php
$bigphoto=DB::table('photos')->where('type',1)->orderBy('id','DESC')->first();
$smallphoto=DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
@endphp
<div class="p-b-20 container" style="margin-bottom: 100px;">
   <div class="how2 how2-cl1 flex-sb-c m-r-10 m-r-0-sr991">
      <h3 class="f1-m-2 cl12 tab01-title">
         @if(session()->get('lang')=='english')
         Photo Gallery
         @else
         ফটো গ্যালারি
         @endif 
      </h3>
   </div>
   <div class="row p-t-35">
      <div class="col-sm-6 p-r-25 p-r-15-sr991">
         <!-- Item post -->	
         <div class="m-b-30" style="height: 300px;">
            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
            <img src="{{asset($bigphoto->photo)}}" alt="IMG">
            </a>
            <div class="p-t-20">
               <h5 class="p-b-5">
                  <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                  @if(session()->get('lang')=='english')
                  {{$bigphoto->title}}
                  @else
                  গুরুত্বপূর্ণ
                  @endif 
                  </a>
               </h5>
               <span class="cl8">
               <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
               Music
               </a>
               <span class="f1-s-3 m-rl-3">
               -
               </span>
               <span class="f1-s-3">
               Feb 18
               </span>
               </span>
            </div>
         </div>
      </div>
      <div class="card example-1 scrollbar-ripe-malinka col-sm-6">
         <div class="card-body">
            @foreach($smallphoto as $row)
            <div class="flex-wr-sb-s m-b-30">
               <a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
               <img src="{{asset($row->photo)}}" alt="IMGDonec metus orci, malesuada et lectus vitae">
               </a>
               <div class="size-w-2">
                  <h5 class="p-b-5">
                     <a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                     @if(session()->get('lang')=='english')
                     {{$row->title}}
                     @else
                     গুরুত্বপূর্ণ
                     @endif
                     </a>
                  </h5>
                  <span class="cl8">
                  <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                  Game
                  </a>
                  <span class="f1-s-3 m-rl-3">
                  -
                  </span>
                  <span class="f1-s-3">
                  Feb 16
                  </span>
                  </span>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>
@php
$allpost=DB::table('posts')->whereNotNull('district_id')->orderBy('id','DESC')->first();
$allpostfirst=DB::table('posts')->whereNotNull('district_id')->skip(1)->orderBy('id','DESC')->limit(5)->get();
$allpost2nd=DB::table('posts')->whereNotNull('district_id')->skip(4)->orderBy('id','DESC')->limit(5)->get();
@endphp
<div class="p-b-25 m-r--10 m-r-0-sr991 container-fluid">
   <div class="how2 how2-cl5 flex-s-c m-r-10 m-r-0-sr991">
      <h3 class="f1-m-2 cl17 tab01-title">
         @if(session()->get('lang')=='english')
         All over the country
         @else
         সারাদেশ
         @endif
      </h3>
   </div>
   @php
   $dis=DB::table('districts')->get();
   @endphp
   <br><br>
   <form action="{{route('saradesh.news')}}" method="get">
      @csrf
      <div class="row">
         <div class="col-lg-4">
            <select class="form-control" name="district_id">
               <option selected="" disabled="">Select One</option>
               @foreach($dis as $row)
               <option value="{{$row->id}}">{{$row->district_en}}|{{$row->district_bn}}</option>
               @endforeach
            </select>
         </div>
         <div class="col-lg-4">
            <select class="form-control" id="subdistrict_id"name="subdistrict_id">
               <option selected="" disabled="">Select One</option>
            </select>
         </div>
         <div class="col-lg-4">
            <button  class="btn btn-success" type="submit">খুঁজুন</button>
         </div>
      </div>
   </form>
   <div class="row p-t-35">
      <div class="col-sm-6 p-r-25 p-r-15-sr991">
         <!-- Item post -->	
         <div class="m-b-30">
            <a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
            <img src="{{ asset($allpost->image)}}" alt="IMG">
            </a>
            <div class="p-t-20">
               <h5 class="p-b-5">
                  <a href="blog-detail-01.html" class="f1-m-3 cl2 hov-cl10 trans-03">
                  @if(session()->get('lang')== 'english')
                  {{$allpost->title_en}}
                  @else
                  {{$allpost->title_bn}}
                  @endif 
                  </a>
               </h5>
               <span class="cl8">
               <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
               Music
               </a>
               <span class="f1-s-3 m-rl-3">
               -
               </span>
               <span class="f1-s-3">
               Feb 18
               </span>
               </span>
            </div>
         </div>
      </div>
      <div class="col-sm-3 p-r-25 p-r-15-sr991">
         <!-- Item post -->
         @foreach($allpostfirst as $row)	
         <div class="flex-wr-sb-s m-b-30">
            <a href="blog-detail-02.html" class="size-w-1 wrap-pic-w hov1 trans-03">
            <img src="{{asset($row->image)}}" alt="IMG">
            </a>
            <div class="size-w-2">
               <h5 class="p-b-5">
                  <a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                  @if(session()->get('lang')== 'english')
                  {{$row->title_en}}
                  @else
                  {{$row->title_bn}}
                  @endif 
                  </a>
                  </a>
               </h5>
               <span class="cl8">
               <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
               Beach
               </a>
               <span class="f1-s-3 m-rl-3">
               -
               </span>
               <span class="f1-s-3">
               Feb 17
               </span>
               </span>
            </div>
         </div>
         @endforeach
      </div>
      <div class="col-sm-3 p-r-25 p-r-15-sr991">
         <!-- Item post -->	
         @foreach( $allpost2nd as $row)
         <div class="flex-wr-sb-s m-b-30">
            <a href="blog-detail-02.html" class="size-w-1 wrap-pic-w hov1 trans-03">
            <img src="{{asset($row->image)}}" alt="IMG">
            </a>
            <div class="size-w-2">
               <h5 class="p-b-5">
                  <a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
                  @if(session()->get('lang')== 'english')
                  {{$row->title_en}}
                  @else
                  {{$row->title_bn}}
                  @endif 
                  </a>
                  </a>
               </h5>
               <span class="cl8">
               <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
               Beachs
               </a>
               <span class="f1-s-3 m-rl-3">
               -
               </span>
               <span class="f1-s-3">
               Feb 17
               </span>
               </span>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
    
<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="district_id"]').on('change', function(){
             var district_id = $(this).val();
             if(district_id) {
                 $.ajax({
                     url: "{{  url('/get/subdistrict/') }}/"+district_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subdistrict_id").empty();
                              $.each(data,function(key,value){
                                  $("#subdistrict_id").append('<option value="'+value.id+'">'+value.subdistrict_bn+'</option>');
                              });
                     },
                    
                 });
             } else {
                 alert('danger');
             }
         });
     });
</script>
@endsection