@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Pelajaran
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Pelajaran</a></li>
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
               <form action="{{ route('pelajaran.update', $pjl->id) }}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                       <label for="">Kode Pelajaran</label>
                       <input type="text" name="kd_pjl" class="form-control" value="{{ $pjl->kd_pjl }}" readonly>
                   </div>
                   <div class="form-group">
                    <label for="">Nama Pelajaran</label>
                    <input type="text" name="nama_pjl" class="form-control" value="{{ $pjl->nama_pjl }}">
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