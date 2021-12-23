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
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('uploads/guru/'. $guru->image) }}" class="img-responsive img-circle" style="width: 150px; height: 150px; object-fit: cover; padding: 10px;">
                    <p style="text-align: center;"><strong>{{ $guru->nama }}</strong></p>
                </div>
                <div class="col-md-7">
                    <form class="form">
                        <table>
                            <tr>
                                <td>Nip/Nuptk</td>
                                <td>:</td>
                                <td>{{ $guru->nip }}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>:</td>
                                <td>{{ $guru->jabatan->nama_jabatan }}</td>
                            </tr>

                            <tr>
                                <td>Mata Pelajaran</td>
                                <td>:</td>
                                <td>{{ $guru->pelajaran->nama_pjl }}</td>
                            </tr>
                            
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Biodata Guru
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td> {{ $guru->tempat_lahir }} </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td> {{ $guru->tgl_lahir }} </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td> {{ $guru->jk }} </td>
                    </tr>
                    <tr>
                        <td>Status Kepegawaian</td>
                        <td>:</td>
                        <td> {{ $guru->status }} </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:</td>
                        <td> {{ $guru->pendidikan }} </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td> {{ $guru->email }} </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td> {{ $guru->nohp }} </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td> {{ $guru->alamat }} </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
    <!-- /. ROW  -->

    <style>
        .form {
            padding-top: 30px;
        }
        .form table tr td {
            font-size: 20px;
        }
    </style>
    
@endsection