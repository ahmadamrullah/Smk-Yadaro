@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Artikel
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Artikel</a></li>
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
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary" style="margin-bottom: 20px;">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>content</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $pst => $hasil)
                                <tr>
                                    <td>{{ $pst + $post->firstitem() }}</td>
                                    <td>{{ $hasil->judul }}</td>
                                    <td>{!! str_limit($hasil->content, 50) !!}</td>
                                    <td>
                                        <img src="{{ asset('uploads/artikel/'. $hasil->image) }}" width="100" height="70">
                                    </td>
                                    <td>
                                        
                                        <form action="{{ route('post.destroy', $hasil->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit "></i> Edit</a>
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