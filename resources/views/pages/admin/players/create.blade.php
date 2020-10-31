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
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tahun_bergabung">Tahun Bergabung</label>
                    <input type="number" class="form-control @error('tahun_bergabung') is-invalid @enderror" name="tahun_bergabung" placeholder="Tahun Bergabung" value="{{ old('tahun_bergabung') }}">
                    @error('tahun_bergabung')
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

                <div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <i class="addPrestasi fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi[]" placeholder="Prestasi" value="{{ old('prestasi') }}">
                    @error('prestasi')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="prestasi"></div>

                <div class="form-group">
                    <label for="pertandingan_mengesankan">Pertandingan Mengesankan</label>
                    <i class="addPmengesankan fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" class="form-control @error('pertandingan_mengesankan') is-invalid @enderror" name="pertandingan_mengesankan[]" placeholder="Pertandingan Mengesankan" value="{{ old('pertandingan_mengesankan') }}">
                    @error('pertandingan_mengesankan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mengesankan"></div>

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

@push('after-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript">
    $('.addPrestasi').on('click', function(){
        addPrestasi();
    });
    function addPrestasi(){
        var prestasi = `<div><div class="form-group">
                    <label for="prestasi">Prestasi</label>
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi[]" placeholder="Prestasi">
                    @error('prestasi')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.prestasi').append(prestasi);
    };
    $('.addPmengesankan').on('click', function(){
        addPmengesankan();
    });
    function addPmengesankan(){
        var mengesankan = `<div><div class="form-group">
                    <label for="pertandingan_mengesankan">Pertandingan Mengesankan</label>
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" class="form-control @error('pertandingan_mengesankan') is-invalid @enderror" name="pertandingan_mengesankan[]" placeholder="Pertandigan Mengesankan">
                    @error('pertandingan_mengesankan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.mengesankan').append(mengesankan);
    };
    $('.remove').live('click', function(){
        $(this).parent().parent().remove();
    });
</script>
@endpush
