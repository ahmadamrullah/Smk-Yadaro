@extends('templates.master')
@push('header')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">	
         <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Data Tenaga Pendidik dan Karyawan
                   </h1>	
                    <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.html"> Tenaga Pendidik</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
@endpush

@section('content')
<section class="siswa" style="margin-top: 7%; margin-bottom: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip/Nuptk</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $item => $hasil)
                                <tr>
                                    <td>{{ $item + $gurus->firstitem() }}</td>
                                    <td>{{ $hasil->nip }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>{{ $hasil->jabatan->nama_jabatan }}</td>
                                    <td>{{ $hasil->pelajaran->nama_pjl }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection

