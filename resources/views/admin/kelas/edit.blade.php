@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Kelas
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Kelas</a></li>
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
               <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                       <label for="">Nama Kelas</label>
                       <input type="text" name="nama_kelas" class="form-control" value="{{ $kelas->nama_kelas }}">
                   </div>
                   <div class="form-group">
                    <label for="">Ruang Kelas</label>
                    <input type="text" name="ruang_kelas" class="form-control" value="{{ $kelas->ruang_kelas }}">
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