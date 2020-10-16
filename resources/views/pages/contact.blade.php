@extends('layouts.default')

@section('title', 'Contact')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ 'frontend/img/bg-img/40.jpg' }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Contact Us</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-8">
                <div class="contact-content-area bg-white mb-30 p-30 box-shadow">
                    <!-- Google Maps -->
                    <div class="map-area mb-30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6391303220516!2d107.17937501431112!3d-6.3110484635164354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6984f8a3cf2733%3A0x4701acf08c77e1c1!2sNPCI%20Kab%20Bekasi!5e0!3m2!1sid!2sid!4v1596690715290!5m2!1sid!2sid" width="1135" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>Contact Info</h5>
                    </div>

                    <div class="contact-information mb-30">

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Our Office:</p>
                                <h6>Sekretariat: GOR Wibawa Mukti Jl. Science Boulevard, Sertajaya, Sertajaya, Kec. Cikarang Tim., Bekasi, Jawa Barat 17530</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Email:</p>
                                <h6>@gmail.com</h6>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-15">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="text">
                                <p>Phone:</p>
                                <h6>-</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Section Title -->
                    <div class="section-heading">
                        <h5>PESAN</h5>
                    </div>

                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="{{ route('contact-create') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="nama" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="pesan" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn mag-btn mt-30" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">
                    <!-- Sidebar Widget -->
                    <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Facebook -->
                            <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i>Facebook</a>
                            <!-- Twitter -->
                            <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i>Twitter</a>
                            <!-- YouTube -->
                            <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i>Youtube</a>
                            <!-- Google -->
                            <a href="#" class="google-followers"><i class="fa fa-google-plus"></i>Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
@endsection
