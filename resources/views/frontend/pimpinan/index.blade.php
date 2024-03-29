@extends('layouts.frontend')
@section('content')

<section class="page-title" style="background-image: url({{asset('assets_front/images/background/10.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Leader</li>
        </ul>
        <h2>{{__('Pimpinan')}}</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Section -->
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Dekan</h2>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @foreach ($pimpinans as $p)
                @if ($p->category_pimpinan_id == 1)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image:url({{asset($p->image)}})"></div>
                        <div class="image">
                            <a href="{{route('detail-leader', ['id'=> $p->id])}}"><img src="{{asset($p->image)}}" /></a>
                            <!-- Social Box -->
                            {{-- <ul class="social-box">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
								<li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
								<li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
								<li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
								<li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
							</ul> --}}
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{route('detail-leader', ['id'=> $p->id])}}">{{$p->name}}</a></h4>
                            <div class="designation">{{$p->jabatan}}</div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div class="sec-title centered my-10">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Wakil Dekan</h2>
        </div>
        <div class="row clearfix">
            <!-- Team Block -->
            @foreach ($pimpinans as $p)
                @if ($p->category_pimpinan_id == 2)
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="pattern-layer" style="background-image:url({{asset($p->image)}})"></div>
                    <div class="image">
                        <a href="{{route('detail-leader', ['id' => $p->id])}}"><img src="{{asset($p->image)}}" /></a>
                        <!-- Social Box -->
                        {{-- <ul class="social-box">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
                        </ul> --}}
                    </div>
                    <div class="lower-content">
                        <h4><a href="{{route('detail-leader', ['id' => $p->id])}}">{{$p->name}}</a></h4>
                        <div class="designation">{{$p->jabatan}}</div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
</section>
@endsection
