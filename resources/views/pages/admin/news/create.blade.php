@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="judul">Judul Berita</label>
          <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" placeholder="Judul Berita" value="{{ old('judul') }}">
          @error('judul')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="photo" class="form-control-label">Foto</label>
          <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*" class="form-control @error('photo') is-invalid @enderror">
          @error('photo') <div class="text-muted">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
          <label for="isi_berita">Isi Berita</label>
          <textarea type="text" rows="10" class="form-control @error('isi_berita') is-invalid @enderror" name="isi_berita" placeholder="Isi Berita" value="{{ old('isi_berita') }}"></textarea>
          @error('isi_berita')
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
