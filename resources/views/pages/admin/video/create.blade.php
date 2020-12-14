@extends('layouts.admin')
@section('title', 'Video')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Video</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="video">Video</label>
          <input type="file" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}">
          @error('video')
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
