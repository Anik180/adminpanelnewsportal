@extends('layouts.font');
@section('meta')
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ $post->title_bn }}" />
  <meta property="og:description" content="{{ $post->detail_bn }}" />
  <meta property="og:image" content="{{URL::to($post->image)}}" />
@endsection
@section('content')


	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="#" class="breadcrumb-item f1-s-3 cl9">
					
                  	@if(session()->get('lang')== 'english')
								 {{$post->category_en}}
						         @else
								 {{$post->category_bn}}
						          @endif
				</a>
				<a href="#" class="breadcrumb-item f1-s-3 cl9"> 
					@if(session()->get('lang')== 'english')
								 {{$post->subcategory_en}}
						         @else
								 {{$post->subcategory_bn}}
						          @endif
				</a>
			</div>
		</div>
	</div>

<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								@if(session()->get('lang')== 'english')
								 {{$post->title_en}}
						         @else
								 {{$post->title_bn}}
						          @endif
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										by {{$post->name}}
									</a>

									<span class="m-rl-3">-</span>

									<span>
										{{$post->post_date}}
									</span>
								</span>

								<span class="f1-s-3 cl8 m-r-15">
									5239 Views
								</span>

								<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
									0 Comment
								</a>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="{{asset($post->image)}}" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
							@if(session()->get('lang')== 'english')
								 {!!$post->detail_en!!}
						         @else
								 {!!$post->detail_bn!!}
						          @endif
							</p>

					

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8">
									@if(session()->get('lang')== 'english')
								 Tags:
						         @else
								 
                                ট্যাগ:
						          @endif

								</span>
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">
								@if(session()->get('lang')== 'english')
								 {{$post->tag_en}}
						         @else
                                 {{$post->tag_bn}}
						          @endif
									</a>
								</div>
							</div>

							<!-- Share -->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
						 <div class="sharethis-inline-share-buttons" data-href="{{ Request::url() }}"></div>
								</div>
							</div>
						</div>

						<!-- Leave a comment -->
						<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								@if(session()->get('lang')== 'english')
								 Leave a Comment
						         @else
								 
                                 মতামত দিন
						          @endif

							</h4>

							<p class="f1-s-13 cl8 p-b-40">
							<form>
							<div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>
							</form>
						</div>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<div class="p-b-60">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
										@if(session()->get('lang')== 'english')
								                  More
						                          @else
								                আরও
						                         @endif
								</h3>
							</div>

							<ul class="p-t-35">
								@php
                           $more=DB::table('posts')->where('category_id',$post->category_id)->orderBy('id','DESC')->limit(5)->get();
								@endphp
											
                                  @foreach($more as $row)
											<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset($row->image)}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													@if(session()->get('lang')== 'english')
								                  {{$row->title_en}}
						                          @else
								                 {{$row->title_bn}}
						                         @endif
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												@if(session()->get('lang')== 'english')
								                 {{$post->category_en}}
						                         @else
								                 {{$post->category_bn}}
						                         @endif
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												{{$row->post_date}}
											</span>
										</span>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<!-- Archive -->
						<div class="p-b-37">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Archive
								</h3>
							</div>

							<ul class="p-t-32">
								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											July 2018
										</span>

										<span>
											(9)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											June 2018
										</span>

										<span>
											(39)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											May 2018
										</span>

										<span>
											(29)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											April  2018
										</span>

										<span>
											(35)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											March 2018
										</span>

										<span>
											(22)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											February 2018
										</span>

										<span>
											(32)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											January 2018
										</span>

										<span>
											(21)
										</span>
									</a>
								</li>

								<li class="p-rl-4 p-b-19">
									<a href="#" class="flex-wr-sb-c f1-s-10 text-uppercase cl2 hov-cl10 trans-03">
										<span>
											December 2017
										</span>

										<span>
											(26)
										</span>
									</a>
								</li>
							</ul>
						</div>

						<!-- Popular Posts -->
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									@if(session()->get('lang')== 'english')
								 Popular
						         @else
								 জনপ্রিয় 
						          @endif

								</h3>
							</div>

							<ul class="p-t-35">
								@php
                           $popular=DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(5)->get();
                           @endphp
                           @foreach($popular as $row)
								<li class="flex-wr-sb-s p-b-30">
									<a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{asset($row->image)}}" alt="IMG">
									</a>

									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
													@if(session()->get('lang')== 'english')
								                  {{$row->title_en}}
						                          @else
								                 {{$row->title_bn}}
						                         @endif
											</a>
										</h6>

										<span class="cl8 txt-center p-b-24">
											<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
												@if(session()->get('lang')== 'english')
								                 {{$post->category_en}}
						                         @else
								                 {{$post->category_bn}}
						                         @endif
											</a>

											<span class="f1-s-3 m-rl-3">
												-
											</span>

											<span class="f1-s-3">
												{{$row->post_date}}
											</span>
										</span>
									</div>
								</li>
								@endforeach

					

							</ul>
						</div>

						<!-- Tag -->
						<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>

							<div class="flex-wr-s-s m-rl--5">
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Fashion
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Denim
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Crafts
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Magazine
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									News
								</a>

								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									Blogs
								</a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0" nonce="6uGGugQ3"></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5efd6db9f8f53a00131ec6fe&product=inline-share-buttons" data-href="{{Request::url()}}" async="async"></script>
@endsection