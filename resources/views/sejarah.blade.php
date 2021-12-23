@extends('templates.master')
@push('header')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
         <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Sejarah Smk	
                   </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/sejarah"> Sejarah SMK</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
@endpush

@section('content')
    <section class="section-sejarah">
        {{-- awal container --}}
        <div class="container">
            <div class="row sejarah">
               <div class="col-lg-12">
                   <div class="row">
                    <div class="col-lg-4">
                        <img src="{{ asset('assets') }}/img/sejarah.jpg" class="img-fluid pb-5">
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-3">Sejarah Smk Islam Yadaro</h3>
                        <p>
                            MK ISLAM PLUS YADARO merupakan salah satu lembaga pendidikan yang dikelola oleh Pondok Pesantren Darussalam Al Kubro Desa Moyot Kecamatan Sakra Kabupaten Lombok Timur Nusa Tenggara Barat. Yayasan Pondok Pesantren Darussalam Al Kubro yang lebih dikenal dengan sebutan YADARO didirikan oleh H. Saleh pada bulan juli 2007 silam.

                            SMK Islam Plus Yadaro berdiri sejak tahun 2016 tepatnya sesuai dengan SK Ijin Operasional pada tanggal 31 Agustus. Lembaga ini membuka Program Keahlian Teknik Komputer dan Informatika dengan mengambil jurusan/kompetensi keahlian Teknik Komputer dan Jaringan. Sejak dibuka, lembaga ini memiliki cukup banyak peminat dikarnakan jurusan yang ada memang menjadi jurusan yang paling banyak dicari. Tetapi karna mempertimbangkan ketersediaan sarana dan prasarana dan SDM maka santri/wati baru yang diterima sebanyak 2 (dua) rombel saja.
                        </p>
                    </div>
                   </div>
               </div>
            </div>
        </div>
        {{-- end container --}}
    </section>

    <section class="section-visi-misi">
        <div class="container">
            <div class="row visi-misi justify-content-center">
                <div class="col-lg-10">
                    <h3 class="text-center pt-5 pb-4">Motto Smk Islam Yadaro</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="text-center pb-3">Visi</h4>
                            <p>
                                Menjadi Sekolah Menengah Kejuruan yang berkarakter, berbudaya, berwawasan lingkungan, menghasilkan insan yang bertaqwa, profesional, mampu berwirausaha dan berdaya saing global
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="text-center pb-3">Misi</h4>
                           <p>
                            Mengembangkan kultur sekolah untuk memberdayakan peserta didik agar mejadi insan yang berakhlak mulia, berkarakter, kreatif dan kompetitif;

                            Meningkatkan kompetensi peserta didik untuk memasuki dunia kerja, baik di tingkat nasional maupun internasional berdasarkan imtak dan iptek;
                            
                            Meningkatkan Mutu kompetensi pendidik dan tenaga kependidikan yang profesional;
                            
                            Menanamkan sikap disiplin, kepekaan sosial, semangat nasionalisme dan patriotisme kepada seluruh warga sekolah;
                            
                            Meningkatkan sarana dan prasarana pendidikan untuk mendukung proses pembelajaran yang optimal;
                            
                            Meningkatkan pelayanan untuk memenuhi kepuasan pelanggan.
                           </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection


@push('style')
    <style>
        .section-sejarah {
            margin-top: 8%;
            margin-bottom: 3%
        }
        .sejarah img {
            object-fit: cover;
        }

        .section-visi-misi {
            margin-top: 7%;
            margin-bottom: 5%;
        }

        .visi-misi {
            box-shadow: 0px 3px 20px rgba(0, 0, 0, 0.5);
            padding-bottom: 3%;
        }
    </style>
@endpush