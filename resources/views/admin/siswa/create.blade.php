@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Siswa
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Siswa</a></li>
        <li class="active">{{ $judul }}</li>
    </ol>            
</div>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 {{ $judul }}
            </div>
            <div class="panel-body">
               <form action="{{ route('siswa.store') }}" method="post">
                   @csrf
                   <div class="form-group">
                       <label for="">Nis</label>
                       <input type="text" name="nis" class="form-control">
                   </div>
                   <div class="form-group">
                    <label for="">Nisn</label>
                    <input type="text" name="nisn" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas_id" class="form-control">
                        <option value="">Select Choose!</option>
                        @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }} | {{ $kls->ruang_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                   <select name="jk" class="form-control">
                       <option value="">Select Choose!</option>
                       <option value="laki-laki">laki-laki</option>
                       <option value="perempuan">perempuan</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="jurusan_id" class="form-control">
                        <option value="">Select Choose!</option>
                        @foreach ($jurusan as $jrs)
                        <option value="{{ $jrs->id }}">{{ $jrs->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
               </form>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
    <!-- /. ROW  -->
@endsection