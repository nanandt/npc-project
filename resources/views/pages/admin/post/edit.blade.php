@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('post.update', $item->post_id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $item->title }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea type="text" rows="10" class="form-control @error('body') is-invalid @enderror" name="body">{{ $item->body }}</textarea>
          @error('title')
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
