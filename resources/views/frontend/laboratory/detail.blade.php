@extends('layouts.frontend')
@section('content')
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/9.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
        </ul>
        <h2>{{$data->name}}</h2>
    </div>
</section>
<section class="project-detail-section">
    <div class="auto-container">
        <!-- Social Box -->
        <div class="social-box">
            <div class="box-inner">
                <!-- Social List -->
                <ul class="social-list">
                    <li class="share">Share:</li>
                    <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                    <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                    <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
                </ul>
            </div>
        </div>
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Tentang Laboratorium</h3>
                    <div class="text"><hr></div>
                    <hr>
                    <ul class="service-list mt-8">
                        <li>
                            <span class="icon flaticon-briefcase-2"></span>
                            <strong>Nama Laboratorium</strong>
                            {{$data->name}}
                        </li>
                        <li>
                            <span class="icon flaticon-avatar"></span>
                            <strong>Kepala Laboratorium</strong>
                            {{$data->kepala_lab}}
                        </li>
                        <li>
                            <span class="icon flaticon-price-tag"></span>
                            <strong>Category</strong>
                            {{$data->category->name}}
                        </li>
                        <li>
                            <span class="icon flaticon-map"></span>
                            <strong>Lokasi</strong>
                            {{$data->location}}
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Carousel Column -->
            <div class="carousel-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        @if (!empty($data->gallery))
                        @foreach ($data->gallery as $g)
                        <div class="slide">
                            <div class="image">
                                <img src="{{asset($g->gallery_image)}}" alt="" />
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="project-mission-section">
    <div class="auto-container">
        <h3>Deskripsi</h3>
        <div class="text" style="font-size: 16px">
            <p>{!!clean($data->description)!!}</p>
        </div>

    </div>
</section>
@endsection
