@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Foto</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="cabang_olahraga_id">Cabang Olahraga</label>
            <select name="cabang_olahraga_id" required class="form-control">
                <option value="">Pilih Cabang Olahraga</option>
                @foreach ($cabors as $cabor)
                    <option value="{{ $cabor->cabang_olahraga_id}} ">
                    {{ $cabor->nama_cabor }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
          <label for="foto" class="form-control-label">Foto</label>
          <input type="file" name="foto" value="{{ old('foto') }}" accept="image/*" class="form-control @error('foto') is-invalid @enderror">
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
