@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Video {{ $item->pidio->nama_cabor }}</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('videos.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="cabang_olahraga_id">Cabang Olahraga</label>
          <select name="cabang_olahraga_id" required class="form-control">
            <option value="{{ $item->cabang_olahraga_id }}">Pilih Cabang Olahraga</option>
            @foreach ($cabors as $cabor)
              <option value="{{ $cabor->cabang_olahraga_id}} ">
                {{ $cabor->nama_cabor }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="video">Video</label>
          <input type="file" class="form-control" name="video" placeholder="Video">
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
