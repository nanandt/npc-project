@extends('layouts.default')
@section('title', 'Foto')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>FOTO</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Foto</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>FOTO</h5>
                        </div>

                        <div class="img-area">
                            @foreach ($items as $gallery)
                            <a href="{{ Storage::url($gallery->foto) }}">
                            <div class="single-img"><img src="{{ Storage::url($gallery->foto) }}" width="215" alt=""></div></a>
                            @endforeach
                        </div>

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

                    <!-- >>>>>>>>>>>>>>>>>>>>
                    Post Right Sidebar Area
                    <<<<<<<<<<<<<<<<<<<<< -->
                    <div class="post-sidebar-area right-sidebar mt-10 mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Instagram -->
                            <a href="https://www.instagram.com/npcikabupatenbekasi/" target="_blank" rel="nofollow" class="instagram-followers"><i class="fa fa-instagram"></i>Instagram</a>
                            <!-- Facebook -->
                            <a href="#" target="_blank" rel="nofollow" class="facebook-fans"><i class="fa fa-facebook"></i>Facebook</a>
                            <!-- Twitter -->
                            <a href="#" target="_blank" rel="nofollow" class="twitter-followers"><i class="fa fa-twitter"></i>Twitter</a>
                            <!-- YouTube -->
                            <a href="#" target="_blank" rel="nofollow" class="youtube-subscribers"><i class="fa fa-youtube"></i>YouTube</a>
                            <!-- Google -->
                            <a href="mailto:#?" target="_blank" rel="nofollow" class="google-followers"><i class="fa fa-google"></i>Gmail</a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    <!-- ##### About Us Area End ##### -->

@endsection
