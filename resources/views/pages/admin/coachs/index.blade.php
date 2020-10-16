@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pelatih</h1>
        <a href="{{ route('coachs.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Pelatih
        </a>
        </div>

        <div class="row">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pelatih</th>
                    <th>Cabang Olahraga</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($items as $item)
                {{-- $items diambil dri travelpacakgecontroller di fungsi index --}}
                <tr>
                    <td>{{ $item->pelatih_id }}</td>
                    <td>{{ $item->nama_pelatih }}</td>
                    <td>{{ $item->cabang_olahraga->nama_cabor }}</td>
                    <td>
                    <img src="{{ Storage::url($item->thumbnail) }}" style="width:150px"
                        class="img-thumbnail">
                    </td>
                    <td>
                    <a href="{{ route('coachs.edit', $item->pelatih_id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('coachs.destroy', $item->pelatih_id) }}" method="POST"
                        class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                        <i class="fa fa-trash">

                        </i>
                        </button>
                    </form>
                    </td>
                </tr>
                @empty
                    <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
