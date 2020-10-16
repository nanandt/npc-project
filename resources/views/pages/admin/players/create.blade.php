@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pemain</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_pemain">Nama Pemain</label>
                    <input type="text" class="form-control @error('nama_pemain') is-invalid @enderror" name="nama_pemain" placeholder="Nama Pemain" value="{{ old('nama_pemain') }}">
                    @error('nama_pemain')
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
                    <label for="thumbnail">Foto</label>
                    <input type="file" value="{{ old('thumbnail') }}" class="form-control @error('thumbnail') is-invalid @enderror" accept="image/*" name="thumbnail" placeholder="Foto">
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
    {{-- fungsi old adlh jika user salah input data, data tsb tidak hilang --}}
@endsection
