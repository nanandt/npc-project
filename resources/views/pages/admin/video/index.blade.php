@extends('layouts.admin')
@section('title', 'Video')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Video</h1>
                        <a href="{{route('video.create')}}" class="btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-plus fa-sm text-white-50"></i>
                        Tambah Video
                        </a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Video</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>
                                                <video style="max-width: 200px" controls>
                                                    <source src="{{ Storage::url($item->video) }}" type="video/mp4">
                                                </video>
                                            </td>

                                            <td>
                                                <a href="{{ route('video.edit', $item->id) }}" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                                </a>
    
                                                <form action="{{ route('video.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                    <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
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