@extends('templates.master')

@push('header')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
         <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Program Kejuruan		
                   </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="//program_kejuruan"> Program Kejuruan</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
@endpush

@section('content')
    <!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						@foreach ($kejuruan as $kjr)
                        <div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="{{ asset('uploads/kejuruan/'. $kjr->image) }}" style="object-fit: cover; height: 180px;">
								</div>								
							</div>
							<div class="details">
								<a href="{{ route('kejuruan.detail', $kjr->slug) }}">
									<h4>
										{{ $kjr->judul }}
									</h4>
								</a>
								<p>
									{!! str_limit($kjr->content, 100) !!}										
								</p>
							</div>
						</div>	
                        @endforeach
																											
					</div>
				</div>	
			</section>
			<!-- End popular-courses Area -->
@endsection