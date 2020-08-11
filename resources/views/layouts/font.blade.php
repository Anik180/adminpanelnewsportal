@php
$category=DB::table('categories')->orderBy('id','ASC')->get();
$seo=DB::table('seos')->first();
$post=DB::table('posts')->get();
$horizontal1=DB::table('ads')->where('type',2)->first();
$set=DB::table('settings')->first();
$popular=DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(3)->get();
$social=DB::table('socials')->first();
@endphp

<html>
<head>
	<title>{{$seo->meta_title}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="{{$seo->meta_author}}">
	<meta name="keyword" content="{{$seo->meta_keyword}}">
	<meta name="description" content="{{$seo->meta_description}}">
	<meta name="google-analytics" content="{{$seo->google_analytics}}">
	<meta name="google-verification" content="{{$seo->google_verification}}">
	<meta name="alexa-analytics" content="{{$seo->alexa_analytics}}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('public/fontend/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/util.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/fontend/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition">
	   	 @php
    function bn_date($str)
        {
         $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en, $bn, $str);
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
        $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
         $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
         $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
         $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
         $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
        $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( '১২', '২৪' );
        $bn = array( '৬', '১২' );
        $str = str_replace( $en, $bn, $str );
         return $str;
        }
@endphp
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
	<nav class="navbar-inverse navbar-expand-lg navbar-dark" style="font-size:14px; background-color:#142952";>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
			<svg class="bi bi-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		</button>
  <div class="collapse navbar-collapse container-fluid" id="navbarNavDropdown">
    <ul class="navbar-nav nav-upper mr-auto">
      <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
      <li class="nav-item active">
        <span class="nav-link" ><i class="fas fa-map-marker"> &nbsp; </i>
       @if(session()->get('lang')=='english')
			Dhaka
		@else
			ঢাকা
			@endif
        </span>
      </li>
      <li class="nav-item active">
         <span class="nav-link" ><i class="fas fa-calendar-minus"> &nbsp; </i>
          @if(session()->get('lang')=='english')
			{{date('d M Y, l, h:i:s a')}}
		@else
			{{ bn_date(date('d M Y, l, h:i:s a'))}}
			@endif

         
     </span>
      </li>
      <li class="nav-item active">
        <span class="nav-link" ><i class="fas fa-clock"> &nbsp; </i>
         @if(session()->get('lang')=='english')
	   Updated 5 minutes Ago
		@else
		 আপডেট ৫ মিনিট আগে
			@endif
        </span>
      </li>      
    </ul>
	
  </div>
</nav>
		<div class="container-menu-desktop">


			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="{{route('home')}}"><img src="{{asset($set->logo)}}" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
		

				<ul class="main-menu-m">
					@foreach($category as $row)
				    @php
                   $subcategory=DB::table('subcategories')->where('category_id',$row->id)->get();
                    @endphp
					<li>
						<a href="#">{{$row->category_bn}}</a>
						<ul class="sub-menu-m">
							@foreach($subcategory as $row)
							<li><a href="#">{{$row->subcategory_bn}}</a></li>
							@endforeach
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
					@endforeach

				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="">
					<a href="{{ url('/') }}"><img src="{{asset($set->logo)}}" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					@if($horizontal1==NULL)
					@else
					<a href="{{$horizontal1->link}}" target="_blank"><img src="{{asset($horizontal1->ads)}}" alt="IMG"></a>
					@endif
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="{{ url('/') }}">
							<img src="{{asset($set->logo)}}" alt="LOGO">
						</a>

						<ul class="main-menu">
							@foreach($category as $row)
							@php
                   
                   $subcategory=DB::table('subcategories')->where('category_id',$row->id)->get();
                    @endphp
							<li class="main-menu-active">
								<a href="#">
									@if(session()->get('lang')=='english')
									{{$row->category_en}}
									@else
									{{$row->category_bn}}
									@endif
								</a>
								<ul class="sub-menu">
									@foreach($subcategory as $row)
									<li>
									<a href="{{URL::to('posts/'.$row->id.'/'.$row->subcategory_bn)}}">
										@if(session()->get('lang')=='english')
									{{$row->subcategory_en}}
									@else
									{{$row->subcategory_bn}}
									@endif
									</a>
								</li>
									@endforeach
								</ul>
							</li>
							@endforeach
                                 <span>|</span>
								<li class="main-menu-active">
								<a>Language</a>
								<ul class="sub-menu">
									@if(session()->get('lang')=='english')
									<li><a href="{{route('lang.bangla')}}">Bangla</a></li>
									@else
									<li><a href="{{route('lang.english')}}">English</a></li>
									@endif
								</ul>
					           </li>
						</ul>

					</nav>
				</div>
			
			</div>

		</div>
	</header>
@php
$headline=DB::table('posts')
        ->join('categories','posts.category_id','categories.id')
        ->join('subcategories','posts.subcategory_id','subcategories.id')
        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
        ->where('posts.headline',1)
        ->orderBy('id','DESC')
        ->limit(5)
        ->get();
       
$আনিক=DB::table('notices')->first();
@endphp

	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8 bg-red">
					@if(session()->get('lang')=='english')
			             Headline:
		                    @else
			                শিরোনাম:
			        @endif
					
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					@foreach($headline as $row)
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						@if(session()->get('lang')=='english')
			             {{$row->title_en}}
		                    @else
			                {{$row->title_bn}}
			        @endif
					</span>
					@endforeach
					
				
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>
	@if($আনিক->status==1)
    <section>
    	<div class="container">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">
					@if(session()->get('lang')== 'english')
							    Notice :
					@else
							 বিজ্ঞপ্তি :
					@endif
					
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
				<marquee>
					
					<a href="" style="color: red;">  
						@if(session()->get('lang')== 'english')
								{{ $আনিক->notice_en }}
						@else
								 {{ $আনিক->notice}}
						@endif
					</a>	
				</marquee>
				</div>
			</div>
    	</div>
    </section> 
    @endif	
@yield('content')
	<!-- Footer -->
	<footer>
		<div class="bg2 p-t-40 p-b-25">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<a href="index.html">
								<img class="max-s-full" src="{{asset($set->logo)}}" alt="LOGO">
							</a>
						</div>

						<div>
							<p class="f1-s-1 cl11 p-b-16">
                    
                              <div class="fb-root">
                            <div class="fb-page" data-href="https://web.facebook.com/SAPG.PHOTOGRAPH" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="" class="fb-xfbml-parse-ignore"><a href="">SAPG</a></blockquote></div>
                              <div id="fb-root"></div>
                               <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=251302696084561&autoLogAppEvents=1"></script>
                        </div>
							</p>
							<div class="p-t-15">
								<a href="{{$social->facebook}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-facebook-f"></span>
								</a>

								<a href="{{$social->twitter}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-twitter"></span>
								</a>

								<a href="{{$social->instagram}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-instagram"></span>
								</a>

								<a href="{{$social->linkedin}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-linkedin"></span>
								</a>

								<a href="{{$social->youtube}}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
									<span class="fab fa-youtube"></span>
								</a>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
                  @if(session()->get('lang')=='english')
                        Most Popular 
                        @else
                        জনপ্রিয়
                        @endif 
							</h5>
						</div>

						<ul>
							@foreach($popular as $row)
							<li class="flex-wr-sb-s p-b-20">
								<a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
									<img src="{{asset($row->image)}}" alt="IMG">
								</a>

								<div class="size-w-5">
									<h6 class="p-b-5">
										<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">
											  @if(session()->get('lang')=='english')
                                        {{$row->title_en}} 
                                         @else
                                      {{$row->title_bn}} 
                                         @endif
										</a>
									</h6>

									<span class="f1-s-3 cl6">
										{{$row->post_date}}
									</span>
								</div>
							</li>
							@endforeach
						</ul>
					</div>

					<div class="col-sm-6 col-lg-4 p-b-20">
						<div class="size-h-3 flex-s-c">
							<h5 class="f1-m-7 cl0">
								@if(session()->get('lang')== 'english')
								Address
						   @else
								 যোগাযোগ
						   @endif
							</h5>
						</div>

						<ul class="m-t--12">
							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
						@if(session()->get('lang')== 'english')
								{!!$set->address_en!!}
						   @else
								 {!!$set->address_bn!!}
						   @endif
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
								@if(session()->get('lang')== 'english')
								{{$set->phone_en}}
						   @else
								 {{$set->phone_bn}}
						   @endif
								</a>
							</li>

							<li class="how-bor1 p-rl-5 p-tb-10">
								<a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">
								 {{$set->email}}
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="bg11">
			<div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright © 2020 

					<a href="#" class="f1-s-1 cl10 hov-link1"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="http://www.anikacharjya.com/" target="_blank"> Anik Acharjya </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</span>
			</div>
		</div>
	</footer>

	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
	</div>


<!--===============================================================================================-->	
	<script src="{{asset('public/fontend/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/fontend/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/fontend/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/fontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/fontend/js/main.js')}}"></script>

</body>
</html>