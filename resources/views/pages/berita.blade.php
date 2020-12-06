@extends('layouts.default')
@section('title', 'Berita')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/41.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>BERITA</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="mag-breadcrumb py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Archive Post Area Start ##### -->
<div class="archive-post-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                    <!-- Single Catagory Post -->
                    @foreach ($items as $item)
                    <div class="single-catagory-post d-flex flex-wrap">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail bg-img" style="background-image: url({{ $item->photo ? Storage::url($item->photo) : '' }});">
                            <a href="{{ route('artikel', $item->slug) }}"></a>
                        </div>

                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{ $item->created_at->isoFormat('D MMMM Y') }}</a>
                            </div>
                            <a href="{{ route('artikel', $item->slug) }}" class="post-title">{{ $item->title }}</a>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa officia deserunt mollit anim id est laborum. Sed ut perspiciatis lorem150</p>
                        </div>
                    </div>
                    @endforeach


                    <!-- Pagination -->
                    <div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    {{ $items->links('pagination::bootstrap-4') }}
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Instagram -->
                            <a href="#" class="instagram-followers"><i class="fa fa-instagram"></i>Instagram</a>
                            <!-- Facebook -->
                            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i>Facebook</a>
                            <!-- Twitter -->
                            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i>Twitter</a>
                            <!-- YouTube -->
                            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i>YouTube</a>
                            <!-- Google -->
                            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i>Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Archive Post Area End ##### -->
@endsection
