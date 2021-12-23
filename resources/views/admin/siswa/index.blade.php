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
                <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-primary" style="margin-bottom: 10px;">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nisn</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $item => $hasil)
                                <tr>
                                    <td>{{ $item + $siswas->firstitem() }}</td>
                                    <td>{{ $hasil->nis }}</td>
                                    <td>{{ $hasil->nisn }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>{{ $hasil->jurusan->nama_jurusan }}</td>
                                    <td>{{ $hasil->kelas->nama_kelas }}</td>
                                    <td>
                                        <form action="{{ route('siswa.destroy', $hasil->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('siswa.edit', $hasil->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit "></i> Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash "></i> Hapus</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            
                           
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
    <!-- /. ROW  -->
@endsection