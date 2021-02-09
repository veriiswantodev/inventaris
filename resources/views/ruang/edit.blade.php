@extends('layout.main')

@section('title')
    Edit Jenis
@endsection

@section('content')
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Jenis</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Edit Data Jenis</li>
      
    </ol>
  </div>
  
  <div class="row">
    <div class="col-lg-6">
      <!-- Form -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Jenis</h6>
        </div>
        <div class="card-body">
          <form action="/jenis/{{$jenis->id}}/update" method="post">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Jenis</label>
              <input type="text" class="form-control" name="nama_jenis" value="{{$jenis->nama_jenis}}" autofocus>
            </div>
            <div class="form-group">
              <label>Kode Jenis</label>
              <input type="text" name="kode_jenis" class="form-control" value="{{$jenis->kode_jenis}}" disabled>
            </div>
            
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="keterangan" class="form-control" value="{{$jenis->keterangan}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

    </div>
  </div>
@endsection