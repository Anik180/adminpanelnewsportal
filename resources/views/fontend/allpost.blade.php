@extends('layouts.font');

@section('content')
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					Blog
				</span>
			</div>
		</div>
	</div>

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
				         @if(session()->get('lang')== 'english')
								                 All News
						                         @else
								                 সব খবর
						                         @endif 
			
		</h2>
	</div>

	<!-- Post -->
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<!-- Item post -->
							@foreach($post as $row)
							 @php
                            $slug=preg_replace('/\s+/u','-',trim($row->title_bn));
				              @endphp
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="{{URL::to('posts/'.$row->id.'/'.$slug)}}" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="{{asset($row->image)}}" alt="IMG">
								</a>

								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											@if(session()->get('lang')== 'english')
								                 {{$row->title_en}}
						                         @else
								                 {{$row->title_bn}}
						                         @endif 
										</a>
									</h5>

									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by {{$row->name}}
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											{{$row->post_date}}
										</span>
									</div>

									<p class="f1-s-1 cl6 p-b-24">
											@if(session()->get('lang')== 'english')
								                 {{$row->title_en}}
						                         @else
								                 {{$row->title_bn}}
						                         @endif
									</p>

									<a href="{{URL::to('posts/'.$row->id.'/'.$slug)}}" class="f1-s-1 cl9 hov-cl10 trans-03">
											@if(session()->get('lang')== 'english')
								                 Read More
						                         @else
								                 আরও পড়ুন
						                         @endif


										<i class="m-l-2 fa fa-long-arrow-alt-right"></i>
									</a>
								</div>
							</div>
							@endforeach
						</div>
						{{ $post->links() }}
					</div>
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
							<h5 class="f1-m-5 cl0 p-b-10">
								Subscribe
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>

						<!-- Most Popular -->
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										1
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										2
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit consectetur non neque
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										3
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										4
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit justo consectetur non neque elementum
									</a>
								</li>

								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
										5
									</div>

									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										Proin velit consectetur non neque
									</a>
								</li>
							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
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

@endsection