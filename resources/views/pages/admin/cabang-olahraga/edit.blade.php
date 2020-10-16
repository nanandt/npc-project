@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Cabang Olahraga</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('cabang-olahraga.update', $item->cabang_olahraga_id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="nama_cabor">Nama</label>
          <input type="text" class="form-control @error('nama_cabor') is-invalid @enderror" name="nama_cabor" value="{{ $item->nama_cabor }}">
          @error('nama_cabor')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">
          Simpan
        </button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection
