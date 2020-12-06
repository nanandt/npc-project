@extends('layouts.default')
@section('title', 'About')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/40.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>ABOUT US</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">About</li>
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
                        <h5>About Us</h5>
                    </div>
                    <p style="text-align:justify;">Atas saran Prof. Dr. Soeharso, pendiri Rehabilitas Cacat yang kini berganti nama menjadi Balai Besar Rehabilitas Sosial Bina Daksa, Pada tanggal 31 Oktober 1962, Pairan Manurung mendirikan sebuah orgnisasi beranama Yayasan Pembina Olahraga Cacat (YPAC) di Surakarta, Jawa Tengah, Indonesia. Dalam perkembangannya yayasan ini berhasil membina beberapa atlit penyandang disabilitas di masanya.</p>
                    <p style="text-align:justify;">Pada Musyawarah Olahraga Nasional yang diselenggarakan di Yogyakarta pada tanggal 31 Oktober - 1 November 1993, beberapa orang menyarankan mengganti nama YPAC menjadi Badan Pembina Olahraga Cacat (BPOC). Maka sejak tanggal 31 Oktober 1993 itulah nama BPOC digunakan dengan tujuan supaya organisasi ini nantinya bisa mendapatkan bantuan dana dari Pemerintah.</p>
                    <p style="text-align:justify;">Berdasarkan Keputusan yang dibuat pada International Paralympic Committee (IPC) General Assembly pada tanggal 18 November 2005, yang menwajibkan para anggotanya untuk mamekai kata 'paralympic' untuk gerakan dan kegiatan yang berkaitan dengan olahraga penyandang disabilitas, maka BPOC yang kala itu sudah menjadi anggotanya pun kemudian berganti nama menjadi National Paralympic Committee of Indonesia (NPC). Hingga kini nama itulah yang digunakan sebagai nama resmi organisasi dan telah diakui legalitasnya oleh IPC dan Pemerintah Republik Indonesia sebagai induk organisasi pembinaan olahraga untuk penyandang disabilitas di Indonesia.</p>
                    <p style="text-align:justify;">Berbagai halangan dan tantangan telah dilalui oleh organisasi ini. Hingga saat ini NPC Indonesia telah resmi menjadi anggota dari beberapa organisasi olahraga penyandang disabilitas baik di tingkat regional maupun international seperti misalnya, IPC, Asian Paralympic Committee, Asean Para Sport Federation, dll. National Paralympic Committee of Indonesia senantiasa berjuang untuk membina atlit - atlit penyandang disabilitas Indonesia hingga kini telah banyak prestasi yang diraih dalam berbagai kompetisi baik di tingkat regional maupun international.</p>
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
                            <a href="#" class="google-followers"><i class="fa fa-google"></i>Gmail</a>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->
@endsection
