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
                  <tr><th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </tr></thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td class="text-primary">
                      $36,738
                    </td>
                  </tr>
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
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
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