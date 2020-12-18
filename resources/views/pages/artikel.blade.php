@extends('layouts.default')
@section('title', 'Artikel')

@section('content')
<!-- ##### Breadcrumb Area Start ##### -->
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url({{ Storage::url($item->photo) }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>ISI BERITA</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Isi Berita</li>
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
                    <div class="blog-thumb mb-30">
                        <img src="{{ Storage::url($item->photo) }}" alt="">
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            <a href="#">{{ $item->created_at->isoFormat('D MMMM Y') }}</a>
                        </div>
                        <h4 class="post-title">{{ $item->title }}</h4>

                        <p>
                            {!! $item->body !!}
                        </p>

                        <!-- Like Dislike Share -->
                        <div class="like-dislike-share my-5">
                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                <div class="sidebar-area bg-white mb-30 box-shadow">

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                        <!-- Social Followers Info -->
                        <div class="social-followers-info">
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/npcikabupatenbekasi/" target="_blank" rel="nofollow" class="instagram-followers"><i class="fa fa-instagram"></i>Instagram</a>
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/NPC-Kabupaten-Bekasi-106726301325019" target="_blank" rel="nofollow" class="facebook-fans"><i class="fa fa-facebook"></i>Facebook</a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/NPCIKabBekasi" target="_blank" rel="nofollow" class="twitter-followers"><i class="fa fa-twitter"></i>Twitter</a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/channel/UCLpp840IBTVFUbzVr2L5Nyw?guided_help_flow=5" target="_blank" rel="nofollow" class="youtube-subscribers"><i class="fa fa-youtube"></i>YouTube</a>
                            <!-- Google -->
                            <a href="mailto:npckabupatenbekasi@gmail.com?" target="_blank" rel="nofollow" class="google-followers"><i class="fa fa-google"></i>Gmail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
@endsection
