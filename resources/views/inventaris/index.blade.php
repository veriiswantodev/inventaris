@extends('template.index')

@section('title')
Inventaris
@endsection

@section('nav-brand')
    Inventaris
@endsection

@section('content')
<div class="container-fluid">
  <div class="container-fluid">
    <div class="card card-plain">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Data Inventaris
          <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i></button>
          <button class="btn btn-primary btn-sm float-right"><i class="fa fa-print"></i></button>
        </h4>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table_id">
                <thead class=" text-primary">
                  <tr>
                    <th>
                    No.
                    </th>
                    <th>
                      Kode Inventaris
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Merk
                    </th>
                    <th>
                      Tempat
                    </th>
                    <th>
                      Aksi
                    </th>
                  </tr>
              </thead>
                <tbody>
                  @foreach ($inven as $item)
                  <tr>
                    <td>
                      {{$loop->iteration}}
                    </td>
                    <td>
                     {{$item->kode_inventaris}}
                    </td>
                    <td>
                      {{$item->barang->nama}}
                    </td>
                    <td>
                      {{$item->barang->merk}}
                    </td>
                    <td>
                      {{$item->tempat->nama}}
                    </td>
                    <td>
                      <a href=""><span class="fa fa-edit"></span></a>
                      <a href=""><span class="fa fa-trash"></span></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      {{-- Modal --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/inventaris/add" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" name="kode_inventaris" placeholder="{{$full}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                  <select name="barang_id" class="form-control">
                    @foreach ($barang as $i_barang)
                        <option value="{{$i_barang->id}}">{{$i_barang->nama}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <select name="tempat_id" class="form-control">
                    @foreach ($tempat as $i_tempat)
                        <option value="{{$i_tempat->id}}">{{$i_tempat->nama}}</option>
                    @endforeach
                  </select>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<script>
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );
</script>
@endsection