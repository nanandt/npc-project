@extends('layouts.default')
@section('title', 'Jadwal Latihan')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/40.jpg' }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Jadwal</h2>
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
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
                            Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jadwal</li>
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

                        <button class="accordion">JADWAL LATIHAN ATLETIK</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SENIN - 15:30 s/d 17:30 - NOMOR LARI GOR WIBAWAMUKTI DAN NOMOR LEMPAR STD MINI CIKARANG</li>
                                <li><i class="fa fa-check"></i>SELASA - 15:30 s/d 17:30 - NOMOR LARI GOR WIBAWAMUKTI DAN NOMOR LEMPAR STD MINI CIKARANG</li>
                                <li><i class="fa fa-check"></i>KAMIS - 15:30 s/d 17:30 - NOMOR LARI GOR WIBAWAMUKTI DAN NOMOR LEMPAR STD MINI CIKARANG</li>
                                <li><i class="fa fa-check"></i>SABTU - 07:30 s/d 17:30 - GOR WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN RENANG</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SELASA - 16:00 s/d 18:00 - KOLAM RENANG WIBAWA MUKTI</li>
                                <li><i class="fa fa-check"></i>KAMIS - 16:00 s/d 18:00 - KOLAM RENANG WIBAWA MUKTI</li>
                                <li><i class="fa fa-check"></i>SABTU - 16:00 s/d 18:00 - KOLAM RENANG WIBAWA MUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN PANAHAN</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SABTU - 15:30 s/d 17:30 - LAPANGAN PANAHAN WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>MINGGU - 08:00 s/d 11:00 - LAPANGAN PANAHAN WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN BULU TANGKIS</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>RABU - 08:00 s/d 11:00 - GOR BULU TANGKIS WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>SABTU - 08:00 s/d 11:00 - GOR BULU TANGKIS WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN CATUR</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SABTU - 10:00 s/d 12:00 - KANTOR SEKERTARIAT NPCI KAB. BEKASI</li>
                                <li><i class="fa fa-check"></i>SABTU - 13:00 s/d 15:30 - KANTOR SEKERTARIAT NPCI KAB. BEKASI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN TENIS MEJA</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SELASA - 15:30 s/d 17:30 - LAPANGAN TENIS MEJA NPCI KAB. BEKASI WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>KAMIS - 15:30 s/d 17:30 - LAPANGAN TENIS MEJA NPCI KAB. BEKASI WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>SABTU - 08:00 s/d 11:00 - LAPANGAN TENIS MEJA NPCI KAB. BEKASI WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN BALAP SEPEDA</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SENIN - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>RABU - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>JUMAT - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN MENEMBAK</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SABTU - 14:00 s/d 16:00 - GOR PERBAKIN WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>MINGGU - 09:00 s/d 11:00 - GOR PERBAKIN WIBAWAMUKTI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN VOLI DUDUK</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SABTU - 08:00 s/d 10:30 - LAPANGAN VOLI DUDUK NPCI KAB. BEKASI</li>
                                <li><i class="fa fa-check"></i>MINGGU - 08:00 s/d 10:30 - LAPANGAN VOLI DUDUK NPCI KAB. BEKASI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN GOAL BALL</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SELASA - 15:30 s/d 17:30 - LAPANGAN GOAL BALL NPCI KAB. BEKASI</li>
                                <li><i class="fa fa-check"></i>KAMIS - 15:30 s/d 17:30 - LAPANGAN GOAL BALL NPCI KAB. BEKASI</li>
                                <li><i class="fa fa-check"></i>SABTU - 13:00 s/d 15:00 - LAPANGAN GOAL BALL NPCI KAB. BEKASI</li>
                            </ul>
                        </div>

                        <button class="accordion">JADWAL LATIHAN ANGKAT BERAT</button>
                        <div class="panel">
                            <ul>
                                <li><i class="fa fa-check"></i>SENIN - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>SELASA - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>RABU - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>JUMAT - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                                <li><i class="fa fa-check"></i>SABTU - 16:00 s/d 17:30 - GOR WIBAWAMUKTI</li>
                            </ul>
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
                                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
@endsection

@push('after-script')
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("aktif");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endpush
