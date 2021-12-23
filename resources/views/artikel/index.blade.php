@extends('templates.master')

@push('header')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Artikel		
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/artikel"> Artikel</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
@endpush

@section('content')
    <!-- Start top-category-widget Area -->
			<section class="top-category-widget-area pt-90 pb-90 ">
				<div class="container">
					<div class="row">		
						@foreach ($artikel_terbaru as $item)
                        <div class="col-lg-4">
							<div class="single-cat-widget">
								<div class="content relative">
									<div class="overlay overlay-bg"></div>
								    <a href="#" target="_blank">
								      <div class="thumb">
								  		 <img class="content-image img-fluid d-block mx-auto" src="{{ asset('uploads/artikel/'. $item->image) }}" style="object-fit: cover; height: 200px;">
								  	  </div>
								      <div class="content-details">
								        <h4 class="content-title mx-auto text-uppercase">{{ $item->judul }}</h4>
								        <span></span>								 
								      </div>
								    </a>
								</div>
							</div>
						</div>
                        @endforeach
																		
					</div>
				</div>	
			</section>
			<!-- End top-category-widget Area -->
			
			<!-- Start post-content Area -->
			<section class="post-content-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							
							@foreach ($artikel as $item)
							<div class="single-post row">
								<div class="col-lg-3  col-md-3 meta-details">
									
									<div class="user-details row">
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#">admin</a> <span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ $item->created_at }}</a> <span class="lnr lnr-eye"></span></p>
																
									</div>
								</div>
								<div class="col-lg-9 col-md-9 ">
									<div class="feature-img">
										<img class="img-fluid" src="{{ asset('uploads/artikel/'. $item->image) }}" alt="">
									</div>
									<a class="posts-title" href="{{ route('artikel.detail', $item->slug) }}"><h3>{{ $item->judul }}</h3></a>
									<p class="excert">
										{!! Str::limit(  $item->content, 300, '...')  !!}
									</p>
									<a href="{{ route('artikel.detail', $item->slug) }}" class="primary-btn">View More</a>
								</div>
							</div>
							@endforeach
																				
		                    <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            
		                            <li class="page-item"><a href="#" class="page-link">{{ $artikel->links() }}</a></li>
		                            
		                        </ul>
		                    </nav>
						</div>

						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								<div class="single-sidebar-widget search-widget">
									<form class="search-form" action="#">
			                            <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
			                            <button type="submit"><i class="fa fa-search"></i></button>
			                        </form>
								</div>
								<div class="single-sidebar-widget user-info-widget">
									<img src="{{ asset('assets') }}/img/blog/user-info.png" alt="">
									<a href="#"><h4>Charlie Barber</h4></a>
									<p>
										Senior blog writer
									</p>
									<ul class="social-links">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-github"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
									<p>
										Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
									</p>
								</div>
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Program Kejuruan</h4>
									<div class="popular-post-list">
										@foreach ($kejuruan as $item)
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="{{ asset('uploads/kejuruan/'. $item->image) }}" style="object-fit: cover; height: 50px; width: 70px;">
											</div>
											<div class="details">
												<a href="{{ route('kejuruan.detail', $item->slug) }}"><h6>{{ $item->judul }}</h6></a>
												<p>{{ $item->created_at->diFFforhumans() }}</p>
											</div>
										</div>
										@endforeach
																					
									</div>
								</div>

								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Artikel Terkait</h4>
									<div class="popular-post-list">
										@foreach ($artikel_terkait as $item)
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="{{ asset('uploads/artikel/'. $item->image) }}" style="object-fit: cover; height: 50px; width: 70px;">
											</div>
											<div class="details">
												<a href="{{ route('artikel.detail', $item->slug) }}"><h6>{{ $item->judul }}</h6></a>
												<p>{{ $item->created_at->diFFforhumans() }}</p>
											</div>
										</div>
										@endforeach
																					
									</div>
								</div>
								
								
							
																
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End post-content Area -->

@endsection