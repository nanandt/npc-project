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
                    <input type="text" value="{{ old('prestasi') }}" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi[]" placeholder="Prestasi">
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
                    <input type="text" value="{{ old('pertandingan_mengesankan') }}" class="form-control @error('pertandingan_mengesankan') is-invalid @enderror" name="pertandingan_mengesankan[]" placeholder="Pertandingan Mengesankan">
                    @error('pertandingan_mengesankan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mengesankan"></div>

                <div class="form-group">
                    <label for="pertandingan_mengecewakan">Pertandingan Mengecewakan</label>
                    <i class="addPmengecewakan fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('pertandingan_mengecewakan') }}" class="form-control @error('pertandingan_mengecewakan') is-invalid @enderror" name="pertandingan_mengecewakan[]" placeholder="Pertandingan Mengecewakan">
                    @error('pertandingan_mengecewakan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mengecewakan"></div>

                <div class="form-group">
                    <label for="lawan_tangguh">Lawan Tangguh</label>
                    <i class="addLawanTangguh fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('lawan_tangguh') }}" class="form-control @error('lawan_tangguh') is-invalid @enderror" name="lawan_tangguh[]" placeholder="Lawan Tangguh">
                    @error('lawan_tangguh')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="lawanTangguh"></div>

                <div class="form-group">
                    <label for="rekan_berlatih">Rekan Berlatih</label>
                    <i class="addRekanBerlatih fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('rekan_berlatih') }}" class="form-control @error('rekan_berlatih') is-invalid @enderror" name="rekan_berlatih[]" placeholder="Rekan Berlatih">
                    @error('rekan_berlatih')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="rekanBerlatih"></div>

                <div class="form-group">
                    <label for="hobi">Hobi</label>
                    <i class="addHobi fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('hobi') }}" class="form-control @error('hobi') is-invalid @enderror" name="hobi[]" placeholder="Hobi">
                    @error('hobi')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="hobi"></div>

                <div class="form-group">
                    <label for="makanan_favorit">Makanan Favorit</label>
                    <i class="addMakananFavorit fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('makanan_favorit') }}" class="form-control @error('makanan_favorit') is-invalid @enderror" name="makanan_favorit[]" placeholder="Makanan Favorit">
                    @error('makanan_favorit')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="makananFavorit"></div>

                <div class="form-group">
                    <label for="atlit_favorit">Atlit Favorit</label>
                    <i class="addAtlitFavorit fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('atlit_favorit') }}" class="form-control @error('atlit_favorit') is-invalid @enderror" name="atlit_favorit[]" placeholder="Atlit Favorit">
                    @error('atlit_favorit')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="atlitFavorit"></div>

                <div class="form-group">
                    <label for="cita_cita">Cita-cita</label>
                    <i class="addCita fas fa-plus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('cita_cita') }}" class="form-control @error('cita_cita') is-invalid @enderror" name="cita_cita[]" placeholder="Cita Cita">
                    @error('cita_cita')
                    <div class="invalid-feedback">
                    {{ $validator->errors() }}
                    </div>
                    @enderror
                </div>
                <div class="cita"></div>

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
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('prestasi') }}" class="form-control @error('prestasi') is-invalid @enderror" name="prestasi[]" placeholder="Prestasi">
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
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('pertandingan_mengesankan') }}" class="form-control @error('pertandingan_mengesankan') is-invalid @enderror" name="pertandingan_mengesankan[]" placeholder="Pertandigan Mengesankan">
                    @error('pertandingan_mengesankan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.mengesankan').append(mengesankan);
    };

    $('.addPmengecewakan').on('click', function(){
        addPmengecewakan();
    });
    function addPmengecewakan(){
        var mengecewakan = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('pertandingan mengecewakan') }}" class="form-control @error('pertandingan_mengecewakan') is-invalid @enderror" name="pertandingan_mengecewakan[]" placeholder="Pertandigan Mengecewakan">
                    @error('pertandingan_mengecewakan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.mengecewakan').append(mengecewakan);
    };

    $('.addLawanTangguh').on('click', function(){
        addLawanTangguh();
    });
    function addLawanTangguh(){
        var lawanTangguh = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('lawan_tangguh') }}" class="form-control @error('lawan_tangguh') is-invalid @enderror" name="lawan_tangguh[]" placeholder="Lawan Tangguh">
                    @error('lawan_tangguh')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.lawanTangguh').append(lawanTangguh);
    };

    $('.addRekanBerlatih').on('click', function(){
        addRekanBerlatih();
    });
    function addRekanBerlatih(){
        var rekanBerlatih = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('rekan_berlatih') }}" class="form-control @error('rekan_berlatih') is-invalid @enderror" name="rekan_berlatih[]" placeholder="Rekan Berlatih">
                    @error('rekan_berlatih')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.rekanBerlatih').append(rekanBerlatih);
    };

    $('.addHobi').on('click', function(){
        addHobi();
    });
    function addHobi(){
        var hobi = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('hobi') }}" class="form-control @error('hobi') is-invalid @enderror" name="hobi[]" placeholder="Hobi">
                    @error('rekan_berlatih')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.hobi').append(hobi);
    };

    $('.addMakananFavorit').on('click', function(){
        addMakananFavorit();
    });
    function addMakananFavorit(){
        var makananFavorit = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('makanan_favorit') }}" class="form-control @error('makanan_favorit') is-invalid @enderror" name="makanan_favorit[]" placeholder="Makanan Favorit">
                    @error('rekan_berlatih')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.makananFavorit').append(makananFavorit);
    };

    $('.addAtlitFavorit').on('click', function(){
        addAtlitFavorit();
    });
    function addAtlitFavorit(){
        var atlitFavorit = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('atlit_favorit') }}" class="form-control @error('atlit_favorit') is-invalid @enderror" name="atlit_favorit[]" placeholder="Atlit Favorit">
                    @error('atlit_favorit')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.atlitFavorit').append(atlitFavorit);
    };

    $('.addCita').on('click', function(){
        addCita();
    });
    function addCita(){
        var cita = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="text" value="{{ old('cita_cita') }}" class="form-control @error('cita_cita') is-invalid @enderror" name="cita_cita[]" placeholder="Cita-cita">
                    @error('cita_cita')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.cita').append(cita);
    };
    $('.remove').live('click', function(){
        $(this).parent().parent().remove();
    });
</script>
@endpush
