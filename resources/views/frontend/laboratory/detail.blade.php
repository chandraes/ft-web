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
                    <div class="text">
                        <hr>
                    </div>
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
                            <span class="icon flaticon-engineer"></span>
                            <strong>Teknisi</strong>
                            @if (empty($data->koordinator_asisten))
                            -
                            @endif
                            {{$data->koordinator_asisten}}
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
{{-- Peralatan --}}
@if ($data->equipment->count() > 0)

<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Alat & Capaian Laboratorium<span
                    class="separator-two"></span></div>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            <table class="table table-bordered table-hovered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Alat</th>
                        <th>Standar Pengujian</th>
                        <th>Foto Alat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->equipment as $e)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$e->name}}</td>
                        <td>
                            @if (json_decode($e->std_pengujian))
                            <ul style="list-style-type: circle;">
                                @foreach (json_decode($e->std_pengujian) as $i)
                                <li>{{$loop->iteration}}. {{$i}}</li>
                                @endforeach
                            </ul>
                            @endif
                        </td>
                        <td>
                            @if ($e->labEquipmentImage->count() > 0)
                            <ul style="list-style-type: circle;">
                                @foreach ($e->labEquipmentImage as $i)
                                <li style="margin-bottom:1rem">{{$loop->iteration}}.
                                    <div class="gallery-block">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{asset($i->eq_image)}}" alt="" class="img-responsive" style="max-height: 100px; max-width: 100px">
                                                <!-- Overlay Box -->
                                                <div class="overlay-box">
                                                    <div class="overlay-inner">
                                                        <div class="content">
                                                            <a href="{{asset($i->eq_image)}}" data-fancybox="gallery"
                                                                data-caption="" class="icon flaticon-full-screen"></a>
                                                            {{-- <a href="portfolio-detail.html"
                                                                class="icon flaticon-link"></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</section>
@endif
{{-- Team dosen --}}
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Team Dosen<span class="separator-two"></span></div>
            <h2>Dosen</h2>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @if ($data->dosen->count() > 0)
            @foreach ($data->dosen as $d)
            <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url({{asset($d->image)}})"></div>
                    <div class="image">
                        <a href="{{route('detail-dosen', ['id'=> $d->id])}}"><img style="height: 380px"
                                src="{{asset($d->image)}}" /></a>
                    </div>
                    <div class="lower-content">
                        <h4><a href="{{route('detail-dosen', ['id'=> $d->id])}}">{{$d->name}}</a></h4>
                        <div class="designation">{{$d->jurusan_prodi}}</div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-12 text-center">
                <h2>-- No Data -- <br>
                    <hr>
                </h2>
            </div>
            @endif

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