@extends('layout.main')

@section('title')
    Data Inventaris
@endsection

@section('head')

@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Inventaris</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Data</li>
      
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Inventaris</h6>
          <button type="button" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#tambah_data" id="#modalCenter"><span class="icon text-white-50"><i class="fa fa-plus pull-right"></i></span><span class="text">Tambah Data</span></button>
        </div>
        <div class="table-resposive p-3">
          <table id="inventaris_table" class="table table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Jumlah</th>
                <th>Tanggal Register</th>
                <th>Ruang</th>
                <th>Kode Inventaris</th>
                <th>Petugas</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($inventaris as $inv)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$inv->nama}}</td>
                <td>{{$inv->jenis_id}}</td>
                <td>{{$inv->jumlah}}</td>
                <td>{{$inv->tanggal_register}}</td>
                <td>{{$inv->ruang_id}}</td>
                <td>{{$inv->kode_inventaris}}</td>
                <td></td>
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
                <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/inventaris/addinventaris/" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="kondisi" class="col-sm-4 col-form-label">Kondisi</label>
                          <div class="col-sm-8">
                              <input type="text" name="kondisi" class="form-control">
                          </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <input type="text" name="keterangan" class="form-control" placeholder="optional">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                            <input type="text" name="jumlah" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="jenis" class="col-sm-4 col-form-label">jenis</label>
                        <div class="col-sm-8">
                          <select name="jenis_id" class="form-control">
                            <option class="selected">Silahkan Pilih</option>
                            @foreach ($jenis as $dt_jenis)
                                <option value="{{$dt_jenis->id}}">{{$dt_jenis->nama_jenis}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="tanggal_register" class="col-sm-4 col-form-label">Tanggal Register</label>
                        <div class="col-sm-8">
                            <input type="text" name="tanggal_register" class="form-control" id="datepicker">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="ruang" class="col-sm-4 col-form-label">Ruang</label>
                        <div class="col-sm-8">
                          <select name="ruang_id" class="form-control">
                            <option class="selected">Silahkan Pilih</option>
                            @foreach ($ruang as $dt_ruang)
                                <option value="{{$dt_ruang->id}}">{{$dt_ruang->nama_ruang}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="kode_inventaris" class="col-sm-4 col-form-label">Kode Inventaris</label>
                        <div class="col-sm-8">
                            <input type="text" name="kode_inventaris" class="form-control" value="{{$number}}/INV/.../{{$dateMonth}}/{{$dateYears}}" readonly>
                        </div>
                      </div>
                      
                      {{-- <div class="form-group row">
                        <label for="petugas" class="col-sm-4 col-form-label">Petugas</label>
                        <div class="col-sm-8">
                            <input type="text" name="petugas_id" class="form-control">
                        </div>
                      </div> --}}
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
    $('#inventaris_table').DataTable();
  } );
</script>

<script>
$(document).ready(function() {            

$('#datepicker').datepicker({                      

    format: 'yyyy-mm-dd',

    autoclose: true,

}); 

});
</script>

@endsection