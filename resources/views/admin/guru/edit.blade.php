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
               <form action="{{ route('guru.update', $guru->id) }}" method="post" enctype="multipart/form-data">
                    @csrf   
                    @method('PATCH')
                    <div class="row">
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="">Nip/Nuptk</label>
                               <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}">
                           </div>
                           <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" value="{{ $guru->nama }}">
                            </div>
                       
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="{{ $guru->tempat_lahir }}">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control" value="{{ $guru->tgl_lahir }}">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-control" required>
                                    <option value="">Select Choose!</option>
                                    <option value="laki-laki" @if($guru->jk === "laki-laki") selected @endif>laki-laki</option>
                                    <option value="perempuan" @if($guru->jk === "perempuan") selected @endif>perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="">Select Choose!</option>
                                    <option value="PNS"  @if($guru->status === "PNS") selected @endif>PNS</option>
                                    <option value="NON PNS"  @if($guru->status === "NON PNS") selected @endif>NON PNS</option>
                                    <option value="Honorer"  @if($guru->status === "Honorer") selected @endif>Honorer</option>
                                </select>
                            </div>
                       </div>

                       <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pendidikan Terakhir</label>
                                <input type="text" name="pendidikan" class="form-control" value="{{ $guru->pendidikan }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $guru->email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <input type="text" name="nohp" class="form-control" value="{{ $guru->nohp }}">
                            </div>
                            <div class="form-group">
                                <label for="">Upload Photos</label>
                                <input type="file" name="image" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <select name="jabatan_id" class="form-control">
                                    <option value="">Select Choose!</option>
                                    @foreach ($jabatan as $jbt)
                                    <option value="{{ $jbt->id }}" 
                                        @if ($jbt->id === $guru->jabatan_id)
                                        selected
                                        @endif
                                    >{{ $jbt->nama_jabatan }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pelajaran</label>
                                <select name="pelajaran_id" class="form-control">
                                    <option value="">Select Choose!</option>
                                   @foreach ($pelajaran as $pjl)
                                   <option value="{{ $pjl->id }}" 
                                    @if ($pjl->id === $guru->pelajaran_id)
                                       selected
                                   @endif
                                   >{{ $pjl->nama_pjl }}</option>
                                   @endforeach
                                </select>
                            </div>
                       </div>
                       
                   </div>

                   <div class="form-group">
                       <label >Alamat</label>
                       <input type="text" name="alamat" class="form-control" value="{{ $guru->alamat }}">
                   </div>

                   <div class="form-group">
                    <label ></label>
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