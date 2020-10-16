@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pelatih</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('coachs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_pelatih">Nama Pelatih</label>
                    <input type="text" class="form-control @error('nama_pelatih') is-invalid @enderror" name="nama_pelatih" placeholder="Nama pelatih" value="{{ old('nama_pelatih') }}">
                    @error('nama_pelatih')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>

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
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" name="thumbnail" placeholder="Foto">
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    {{-- fungsi old adlh jika user salah input data, data tsb tidak hilang --}}
@endsection
