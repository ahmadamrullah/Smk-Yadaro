@extends('admin.layouts.master')

@section('title')
    SMK ISLAM YADARO
@endsection

@push('header')
<div class="header"> 
    <h1 class="page-header">
        Jabatan
    </h1>
    <ol class="breadcrumb">
        <li><a href="dashboard">Dashboard</a></li>
        <li><a href="#">Jabatan</a></li>
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
                <button type="button" class="btn btn-primary" style="margin-bottom: 20px;" data-toggle="modal" data-target="#exampleModalScrollable">
                    Tambah Data   
                </button>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jabatan</th>
                                <th>Nama Jabatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jabatan as $jbt => $hasil)
                                <tr>
                                    <td>{{ $jbt + $jabatan->firstitem() }}</td>
                                    <td>{{ $hasil->kd_jabatan }}</td>
                                    <td>{{ $hasil->nama_jabatan }}</td>
                                    <td>
                                        
                                        <form action="{{ route('jabatan.destroy', $hasil->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jabatan.edit', $hasil->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit "></i> Edit</a>
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
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Form Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('jabatan.store') }}" method="post">
              @csrf
              <div class="form-group">
                  <label for="">Kode Jabatan</label>
                  <input type="text" name="kd_jabatan" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="">Nama Jabatan</label>
                <input type="text" name="nama_jabatan" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    
@endsection