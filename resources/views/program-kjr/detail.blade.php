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
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/program_kejuruan"> Program Kejuruan</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
@endpush

@section('content')
    <!-- Start course-details Area -->
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
								<img class="img-fluid" src="{{ asset('uploads/kejuruan/'. $kjr->image) }}" style="object-fit: cover; height: 400px; width: 100%;">
							</div>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Deskripsi</div>
	                                <div class="jq-tab-title" data-tab="2">Materi Pembelajaran</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                   {!! $kjr->content !!}
	                                </div>
	                            
	                                <div class="jq-tab-content" data-tab="2">
										<ul class="course-list">
											
											@foreach ($pjl as $item)
                                            <li class="justify-content-between d-flex">
												<p>{{ $item->nama_pjl }}</p>
											</li>
                                            @endforeach

										</ul>
	                                </div>
	                                                               
	                            </div>
	                        </div>
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Trainer’s Name</p> 
										<span class="or">George Mathews</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Course Fee </p>
										<span>$230</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Available Seats </p>
										<span>15</span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Schedule </p>
										<span>2.00 pm to 4.00 pm</span>
									</a>
								</li>
							</ul>
							<a href="#" class="primary-btn text-uppercase">Enroll the course</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End course-details Area -->
@endsection