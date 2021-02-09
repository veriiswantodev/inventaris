@extends('layout.main')

@section('title')
    Ruang
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Ruang</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Data Ruang</li>
      
    </ol>
  </div>
  
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Ruang</h6>
          <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#tambah_data" id="#modalCenter"><span class="icon text-white-50"><i class="fa fa-plus pull-right"></i></span><span class="text">Tambah Data</span></button>
        </div>
        <div class="table-resposive p-3">
          <table id="ruang_table" class="table table-striped">
            <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Kode Ruang</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($ruang as $dt_ruang)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$dt_ruang->nama_ruang}}</td>
                <td>{{$dt_ruang->kode_ruang}}</td>
                <td>{{$dt_ruang->keterangan}}</td>
                <td>
                  <a href="/ruang/{{$dt_ruang->id}}/edit" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                  <a href="/ruang/{{$dt_ruang->id}}/delete" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Row-->
  
  {{-- modal tambah data --}}
  <div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Ruang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/ruang/addruang/" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_ruang" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="kondisi" class="col-sm-4 col-form-label">Kode Ruang</label>
                          <div class="col-sm-8">
                              <input type="text" name="kode_ruang" class="form-control" maxlength="3">
                          </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <input type="text" name="keterangan" class="form-control" placeholder="optional">
                        </div>
                      </div>
                      
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                </div> --}}
            </div>
        </div>
    </div>  
  {{-- end modal --}}
</div>
@endsection

@section('footer')
<script>
  $(document).ready( function () {
    $('#ruang_table').DataTable();
  } );
</script>
@endsection