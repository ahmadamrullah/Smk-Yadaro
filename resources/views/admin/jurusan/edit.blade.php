@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Jurusan
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Jurusan</a></li>
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
               <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                       <label for="">Kode Jurusan</label>
                       <input type="text" name="kd_jurusan" class="form-control" value="{{ $jurusan->kd_jurusan }}">
                   </div>
                   <div class="form-group">
                    <label for="">Nama Jurusan</label>
                    <input type="text" name="nama_jurusan" class="form-control" value="{{ $jurusan->nama_jurusan }}">
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