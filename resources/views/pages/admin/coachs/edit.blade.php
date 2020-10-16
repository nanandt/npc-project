@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pelatih</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('coachs.update', $item->pelatih_id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="nama_pelatih">Nama Pelatih</label>
          <input type="text" class="form-control @error('nama_pelatih') is-invalid @enderror" name="nama_pelatih" value="{{ $item->nama_pelatih }}">
          @error('nama_pelatih')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-group">
            <label for="cabang_olahraga_id">Cabang Olahraga</label>
            <select name="cabang_olahraga_id" class="form-control">
                <option value="{{ $item->cabang_olahraga_id }}">{{ $item->cabang_olahraga->nama_cabor }}</option>
                @foreach ($cabors as $cabor)
                    <option value="{{ $cabor->cabang_olahraga_id }}">
                        {{ $cabor->nama_cabor }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="thumbnail">Foto</label>
            <input type="file" class="form-control @error('thumbnail')is-invalid @enderror" name="thumbnail" placeholder="Foto">
            @error('thumbnail')
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
