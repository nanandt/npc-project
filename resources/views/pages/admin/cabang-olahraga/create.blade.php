@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Cabang Olahraga</h1>
  </div>

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('cabang-olahraga.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama_cabor">Nama Cabang Olahraga</label>
          <input type="text" class="form-control @error('nama_cabor') is-invalid @enderror" name="nama_cabor" placeholder="Cabang Olaraga" value="{{ old('nama_cabor') }}">
          @error('nama_cabor')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="tempat_latihan">Tempat Latihan</label>
          <input type="text" class="form-control @error('tempat_latihan') is-invalid @enderror" name="tempat_latihan" placeholder="Tempat Latihan" value="{{ old('tempat_latihan') }}">
          @error('tempat_latihan')
          <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-group">
        <label for="prestasi">Jadwal Latihan</label>
            <i class="addJadwal fas fa-plus fa-sm" style="float: right"></i>
            <input type="date" value="{{ old('tanggal_latihan[]') }}" class="form-control @error('tanggal_latihan') is-invalid @enderror" name="tanggal_latihan[]" placeholder="Jadwal Latihan">
            @error('tanggal_latihan')
            <div class="invalid-feedback">
            {{ $errors }}
            </div>
            @enderror
        </div>
        <div class="jadwal-latihan"></div>



        <button type="submit" class="btn btn-primary btn-block">
          Simpan
        </button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection

@push('after-script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript">
    $('.addJadwal').on('click', function(){
        addJadwal();
    });
    function addJadwal(){
        var jadwal = `<div><div class="form-group">
                    <i class="remove fas fa-minus fa-sm" style="float: right"></i>
                    <input type="date" value="{{ old('tanggal_latihan') }}" class="form-control @error('tanggal_latihan') is-invalid @enderror" name="tanggal_latihan[]" placeholder="Tanggal Latihan">
                    @error('tanggal_latihan')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                    @enderror
                </div></div>`;
        $('.jadwal-latihan').append(jadwal);

        $('.remove').live('click', function(){
        $(this).parent().parent().remove();
    });
    };
</script>
@endpush
