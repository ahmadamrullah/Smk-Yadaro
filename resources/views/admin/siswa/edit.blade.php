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
               <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                       <label for="">Nis</label>
                       <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}">
                   </div>
                   <div class="form-group">
                        <label for="">Nisn</label>
                        <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
                   </div>

                   <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" value="{{ $siswa->nama }}">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas_id" class="form-control">
                        <option value="">Select Choose!</option>
                        @foreach ($kelas as $kls)
                        <option value="{{ $kls->id }}"
                             @if ($kls->id == $siswa->kelas_id)
                             selected
                            @endif
                        >{{ $kls->nama_kelas }} | {{ $kls->ruang_kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ $siswa->alamat }}">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                   <select name="jk" class="form-control">
                       <option value="">Select Choose!</option>
                       <option value="laki-laki" @if($siswa->jk === "laki-laki") selected @endif>laki-laki</option>
                       <option value="perempuan" @if($siswa->jk === "perempuan") selected @endif>perempuan</option>
                   </select>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $siswa->tempat_lahir }}">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="{{ $siswa->tgl_lahir }}">
                </div>

                <div class="form-group">
                    <label for="">Jurusan</label>
                    <select name="jurusan_id" class="form-control">
                        <option value="">Select Choose!</option>
                        @foreach ($jurusan as $jrs)
                        <option value="{{ $jrs->id }}" 
                            @if ($jrs->id == $siswa->jurusan_id)
                            selected
                            @endif
                        >{{ $jrs->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
               </form>   
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
    <!-- /. ROW  -->
@endsection