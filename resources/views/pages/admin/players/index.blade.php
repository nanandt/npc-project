@extends('layouts.admin')
@section('title')
Pemain
@endsection
@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pemain</h1>
        <a href="{{ route('players.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah Pemain
        </a>
        </div>

        <div class="row">
        <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemain</th>
                    <th>Email</th>
                    <th>Cabang Olahraga</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($items as $item)
                {{-- $items diambil dri travelpacakgecontroller di fungsi index --}}
                <tr>
                    <td>{{ $item->pemain_id }}</td>
                    <td>{{ $item->nama_pemain }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->cabang_olahraga->nama_cabor }}</td>
                    <td>
                    <img src="{{ Storage::url($item->thumbnail) }}" style="width:150px"
                        class="img-thumbnail">
                    </td>
                    <td>
                    <a href="{{ route('players.edit', $item->pemain_id) }}" class="btn btn-warning">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <a href="{{ route('players.show', $item->pemain_id) }}" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                    </a>
                    <form action="{{ route('players.destroy', $item->pemain_id) }}" method="POST"
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
