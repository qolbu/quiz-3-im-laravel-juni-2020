@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Artikel</h1>
<p class="mb-4"><button class="btn btn-primary" onClick="window.location='/artikel/create'">Tambah Artikel</button></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>#</th>
            <th>#</th>
            <th>#</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <th>#</th>
            <th>#</th>
            <th>#</th>
          </tr>
        </tfoot>
        <tbody>
        @foreach($rows as $row)
          <tr>
            <td>{{$row->judul}}</td>
            <td>{{$row->isi}}</td>
            <td>{{$row->slug}}</td>
            <td>{{$row->tag}}</td>
            <td><a href="/show/{{$row->id}}">Show</a></td>
            <td><a href="/edit/{{$row->id}}">Edit</a></td>
            <td><a href="/delete/{{$row->id}}">Delete</a></td>
          </tr>          
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection

@push('scripts')
<!-- Page level plugins -->
<script src="{{ asset('sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Page level custom scripts -->
<script src="{{ asset('sbadmin2/js/demo/datatables-demo.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
