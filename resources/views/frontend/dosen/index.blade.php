@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/11.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
        </ul>
        <h2>{{__('Dosen')}}</h2>
    </div>
</section>
<!-- End Page Title -->

<section class="process-section" id="services" style="background-image:url(images/background/pattern-8.png)">
    <div class="side-icon">
        <img src="images/resource/process-icon.png" alt="" />
    </div>
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Jurusan<span class="separator-two"></span></div>
            <h2>Dosen Pengajar</h2>
        </div>
        <div class="row clearfix">
            @php
                $time = 0;
                $number = 1;
                $icon = ['flaticon-industrial-robot', 'flaticon-factory', 'flaticon-electric-car'];
            @endphp
            @foreach ($category as $c)
                <div class="process-block col-lg-4 col-md-6 col-sm-12 hover-pointer" onclick="window.location.href='{{route('category-dosen', ['id'=> $c->id])}}'">
                    <div class="inner-box wow flipInY" data-wow-delay="{{$time}}ms" data-wow-duration="1500ms">
                        <div class="process-number">{{$number}}</div>
                        <div class="color-layer"></div>
                        <div class="color-layer"></div>
                        <div class="icon {{$icon[array_rand($icon)]}}"></div>
                        <h5>{{$c->jurusan_prodi}}</h5>
                    </div>
                </div>
            @php
                $time += 150;
                $number += 1;
            @endphp
            @endforeach
            <!-- Process Block -->
            
        </div>
    </div>
</section>
<!-- Team Section -->
@endsection
