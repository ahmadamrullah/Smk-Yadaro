@extends('templates.master')

@include('templates.include.slider')
@section('content')
	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Kurikulum Pembelajaran</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Permendikbud nomor 70 tahun 2013 dengan revisi 2018, Struktur Kurikulum SMK Islam Yadaro mengacu pada standar kurikulum 2013. 
							</p>
																
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>SMK Milenial</h4>
						</div>
						<div class="desc-wrap">
							<p>
								SMK Islam Plus Yadaro adalah SMK milenial pertama yang berbasis pondok pesantren dengan mengedepankan Ilmu agama.  
							</p>
																
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Fasilitas</h4>
						</div>
						<div class="desc-wrap">
							<p>
								SMK Islam Plus Yadaro memiliki fasilitas ruang lab praktikum yang nyaman dan wifi yang kecepatannya diatas rata-rata.
							</p>
																
						</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End feature Area -->
			
	<!-- Start popular-course Area -->
	<section class="popular-course-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Program Kejuruan</h1>
						<p>There is a moment in the life of any aspiring.</p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div class="active-popular-carusel">
					
					@foreach ($kjr as $item)
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="{{ asset('uploads/kejuruan/'. $item->image) }}" style="object-fit: cover; height: 200px;">
							</div>								
						</div>
						<div class="details">
							<a href="{{ route('kejuruan.detail', $item->slug) }}">
								<h4>
									{{ $item->judul }}
								</h4>
							</a>
							<p>
								{!! str_limit($item->content, 100) !!}										
							</p>
						</div>
					</div>	
					@endforeach
											
				</div>
			</div>
		</div>	
	</section>
	<!-- End popular-course Area -->
	
	<!-- Start cta-one Area -->
	<section class="cta-one-area relative section-gap">
		<div class="container">
			<div class="overlay overlay-bg" style="background-color: gray;"></div>
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-12">
					<div class="title text-center">
						<h1>Tenaga Pendidik</h1>
					</div>
				</div>
			</div>	

			<div class="row">
				<div class="active-popular-carusel">
					
					@foreach ($guru as $item)
					<div class="single-popular-carusel">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="{{ asset('uploads/guru/'. $item->image) }}" style="object-fit: cover; height: 250px;">
							</div>								
						</div>
						<div class="mt-2" >
							<h4>
								{{ $item->nama }}
								
							</h4>
							<span>{{ $item->jabatan->nama_jabatan }}</span>
							
							
						</div>
					</div>	
					@endforeach
											
				</div>
			</div>

		</div>	
	</section>
	<!-- End cta-one Area -->
				
	<!-- Start review Area -->
	<section class="review-area section-gap relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row">
				<div class="active-review-carusel">
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#"><h4>Lukman Taufik (Alumni)</h4></a>
							
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#"><h4>Haikal Akbar (Alumni)</h4></a>
				
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
							<a href="#"><h4>Hairiah (Orang tua/Wali murid)</h4></a>
							
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>
					<div class="single-review item">
						<div class="title justify-content-start d-flex">
						<a href="#"><h4>H. Hasan Basri (Orang tua/Wali murid)</h4></a>
							
						</div>
						<p>
							Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
						</p>
					</div>	
																																
				</div>
			</div>
		</div>	
	</section>
	<!-- End review Area -->	
	
	

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Artikel Terbaru</h1>
						<p>In the history of modern astronomy there is.</p>
					</div>
				</div>
			</div>					
			<div class="row">
				@foreach ($artikel as $art)
				<div class="col-lg-3 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="{{ asset('uploads/artikel/'. $art->image) }}" style="object-fit: cover; height: 200px;">								
					</div>
					<p class="meta">{{ $art->created_at }}  |  By <a href="#">admin</a></p>
					<a href="{{ route('artikel.detail', $art->slug) }}">
						<h5>{{ $art->judul }}</h5>
					</a>
					<p>
						{!! str_limit($art->content, 100) !!}
					</p>
					<a href="{{ route('artikel.detail', $art->slug) }}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
				</div>
				@endforeach
											
			</div>
		</div>	
	</section>
	<!-- End blog Area -->	
@endsection