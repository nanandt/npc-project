@extends('layouts.admin')
@section('title', 'Video')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Video</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('video.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="video">Video</label>
            <input type="file" class="form-control @error('video')is-invalid @enderror" name="video" placeholder="Video">
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
