@extends('layouts.default')

@section('title', 'Pelatih')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/40.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>PROFIL PELATIH</h2>
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
                        <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cabang Olahraga</li>
                        <li class="breadcrumb-item active" aria-current="page">Judo</li>
                        <li class="breadcrumb-item active" aria-current="page">Pemain</li>
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
                        <h5>Profil Pelatih</h5>
                    </div>

                        <table style="cursor: pointer;">
                            <tr>
                                @foreach ($items as $item)
                                <td>
                                    <div class="container-overlay">
                                        <a href="#">
                                        <img src="{{ Storage::url($item->thumbnail) }}" width="215">
                                        <div class="overlay">{{ $item->nama_pelatih }}</div></a>
                                    </div>
                                </td>
                                <td>&nbsp;</td>
                                @endforeach
                            </tr>
                        </table>

                        <br>

                        <table style="cursor: pointer;">
                            <tr>
                                <td>
                                    <div class="container-overlay">
                                        <a href="#">
                                        <img src="{{ url('frontend/img/core-img/logo_png.png') }}" alt="" width="215">
                                        <div class="overlay">NURHAYATI</div></a>
                                    </div>
                                </td>

                                <td>&nbsp;</td>

                                <td>
                                    <div class="container-overlay">
                                        <a href="#">
                                        <img src="{{ url('frontend/img/core-img/logo_png.png') }}" alt="" width="215">
                                        <div class="overlay">ASRI ANANDA PUTRI</div></a>
                                    </div>
                                </td>
                            </tr>
                        </table>
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
    </section>
<!-- ##### About Us Area End ##### -->
@endsection

