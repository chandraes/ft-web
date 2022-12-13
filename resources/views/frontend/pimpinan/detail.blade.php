@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/10.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Pimpinan</li>
        </ul>
        <h2>{{$pimpinan->jabatan}}</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Detail Section -->
<section class="team-single-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Image Column -->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="{{asset($pimpinan->image)}}" alt="" />
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h2>{{$pimpinan->name}}<span class="category">{{$pimpinan->jabatan}}</span></h2>
                    {{-- <ul class="post-meta">
                        <li><span class="icon flaticon-email-1"></span> <a href="mailto:kanstr@gmail.com">kanstr@gmail.com</a></li>
                        <li><span class="icon flaticon-call"></span> <a href="tel:000-000-0000">000 - 000 - 0000</a></li>
                        <li><span class="icon fa fa-whatsapp"></span> <a href="tel:999-999-9999">999 - 999 - 9999</a></li>
                    </ul> --}}
                    <div class="text my-6">
                        {!! $pimpinan->description !!}
                    </div>

                    {{-- <!-- Social Box -->
                    <ul class="social-icon-one">
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                        <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
                    </ul> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Team Detail Section -->
@endsection
