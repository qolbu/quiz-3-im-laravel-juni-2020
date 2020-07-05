@extends('layouts.master')


@section('content')
 <!-- general form elements -->
 <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Ajukan Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="/artikel">
    @csrf
    <div class="card-body">
        <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" onchange="update(this);" class="form-control" id="judul" name="judul" placeholder="Masukan Judul">
        </div>
        <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" rows="5" cols="30" id="isi" name="isi" placeholder="Masukan Isi Pertanyaan"></textarea>
        </div>
        <div class="form-group">
        <label for="judul">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <div class="form-group">
        <label for="judul">Tag</label>
        <input type="text" class="form-control" id="tag" name="tag" placeholder="Masukan Tag">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
<!-- /.card -->

@endsection

@push('scripts')
<script type="text/javascript">
    function update(elem) { 
        document.getElementById('slug').value = elem.value;  
    }
</script>
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush