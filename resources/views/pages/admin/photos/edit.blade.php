@extends('layouts.admin')
@section('title', 'Foto')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Foto</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('photos.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control @error('foto')is-invalid @enderror" name="foto" placeholder="Foto">
            @error('foto')
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
