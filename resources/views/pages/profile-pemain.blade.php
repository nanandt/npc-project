@extends('layouts.default')
@section('title', 'Profile Pemain')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
{{-- <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/49.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Profil</h2>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
                        <li class="breadcrumb-item active" aria-current="page">Atletik</li>
                        <li class="breadcrumb-item active" aria-current="page">Pemain</li>
                        <li class="breadcrumb-item active" aria-current="page">Profil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-details-area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-xl-8">
                <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                    <div class="blog-content">

                        <!-- Profil Pemain -->
                        <div class="section-heading">
                            <h5>Prestasi</h5>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <ul>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{ $item->prestasi }}</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Etiam vel auctor elit. Usaceros suscipit, lobortis felis non.</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Integer sagittis finibus nequer, euster tincidunt misult.</li>
                                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Pellentesque euismod semeget diam ege</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-4">
                            </div>
                        </div>

                        <!-- Profil Pemain -->
                        <div class="section-heading mt-30">
                            <h5>Di Balik Perjalanan Karier</h5>
                        </div>
                                <ul>
                                    <li><strong>Pertandingan Paling Mengesankan :</strong></li>
                                    <p>-</p>
                                    <li><strong>Pertandingan Paling Mengecewakan :</strong></li>
                                    <p>-</p>
                                    <li><strong>Lawan Paling Tangguh :</strong></li>
                                    <p>-</p>
                                    <li><strong>Rekan Berlatih Favorit :</strong></li>
                                    <p>-</p>
                                </ul>

                            <!-- Profil Pemain -->
                            <div class="section-heading mt-30">
                            <h5>Mengenal Lebih Dekat</h5>
                        </div>
                                <ul>
                                    <li><strong>Hobi :</strong></li>
                                    <p>-</p>
                                    <li><strong>Makanan Favorit :</strong></li>
                                    <p>-</p>
                                    <li><strong>Atlit Favorit :</strong></li>
                                    <p>-</p>
                                    <li><strong>Cita-cita :</strong></li>
                                    <p>-</p>
                                    <li><strong>Tentang Saya :</strong></li>
                                    <p>-</p>
                                </ul>
                    </div>
                </div>
            </div>


            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Tentang</h5>
                        </div>

                        <!-- Tentang Widget -->
                        <ul class="catagory-widgets">
                            <li>Tempat/Tgl. Lahir : 35</li>
                            <br>
                            <li>Email : @gmail.com</li>
                            <br>
                            <li>Tahun Bergabung : -</li>
                            <br>
                            <li>Bagaimana mengawali karir atletik : -</li>
                        </ul>
                    </div>

                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Section Title -->
                            <div class="section-heading">
                            <h5>Social Media Pemain</h5>
                        </div>
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
</section>
<!-- ##### Post Details Area End ##### -->
@endsection
