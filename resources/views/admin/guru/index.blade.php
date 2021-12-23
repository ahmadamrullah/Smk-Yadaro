@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Guru
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Guru</a></li>
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
                <a href="{{ route('guru.create') }}" class="btn btn-sm btn-primary" style="margin-bottom: 20px;">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip/Nuptk</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Jabatan</th>
                                <th>Pelajaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $guru => $hasil)
                                <tr>
                                    <td>{{ $guru + $gurus->firstitem() }}</td>
                                    <td>{{ $hasil->nip }}</td>
                                    <td>{{ $hasil->nama }}</td>
                                    <td>{{ $hasil->alamat }}</td>
                                    <td>{{ $hasil->jabatan->nama_jabatan }}</td>
                                    <td>{{ $hasil->pelajaran->nama_pjl }}</td>
                                    <td>
                                        
                                        <form action="{{ route('guru.destroy', $hasil->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('guru.show', $hasil->id) }}" class="btn btn-sm btn-success"><i class="fa fa-view "></i> Detail</a>
                                            <a href="{{ route('guru.edit', $hasil->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit "></i> Edit</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
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