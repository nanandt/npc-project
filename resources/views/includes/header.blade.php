<!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="{{ route('home') }}" class="nav-brand"><img src="{{ url('frontend/img/logo/logo_png5.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="nav-item {{ request()->is('/') ? ' active' : '' }}">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Cabang Olahraga</a>

                                        <ul class="dropdown">
                                             @foreach ($cabors as $cabor)
                                            <li>
                                              <a href="#">{{ $cabor->nama_cabor }}</a>
                                              <ul class="dropdown">
                                                <li><a href="{{ route('cabor-pemain', $cabor->cabang_olahraga_id) }}">PEMAIN</a></li>
                                                <li><a href="{{ route('cabor-pelatih', $cabor->cabang_olahraga_id) }}">PELATIH</a></li>
                                              </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#">Galeri</a>
                                        <ul class="dropdown">
                                            <li><a href="foto.html">FOTO</a></li>
                                            <li><a href="video.html">VIDEO</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item {{ request()->is('berita') ? ' active' : '' }}"><a class="nav-link" href="{{ route('berita') }}">Berita</a></li>
                                    <li class="nav-item {{ request()->is('jadwal-latihan') ? ' active' : '' }}"><a class="nav-link" href="{{ route('jadwal-latihan') }}">Jadwal Latihan</a></li>
                                    <li class="nav-item {{ request()->is('about') ? ' active' : '' }}"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                                    <li class="nav-item {{ request()->is('contact') ? ' active' : '' }}"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Login -->
                            <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
