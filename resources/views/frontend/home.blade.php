@extends('layouts.frontend')
@section('content')
<!-- Main Slider Section -->
@if (!empty($carousels))
@foreach ($carousels as $c)
<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">

        <div class="slide" style="background-image:url({{$c->image}}); height: 600px">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 cl-md-12 col-sm-12 ">
                        <div class="inner-column">
                            {{-- <div class="title"></div> --}}
                            <h1 class="title">{{$c->title}}</h1>
                            <div class="text">{{$c->subtitle}}</div>
                            {{-- <div class="clearfix">
                                {{-- <div class="btns-box">
                                    <a class="btn-style-three theme-btn" href="about.html"><span class="txt">Read
                                            More</span></a>
                                </div>
                                <div class="play-box">
                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                        class="lightbox-image play-button"><span class="flaticon-play-arrow"><i
                                                class="ripple"></i></span></a>
                                    See Our Achivity
                                </div> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


{{-- Information --}}
<section class="news-section" style="background-image:url({{asset('assets_front/images/background/pattern-5.png')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Latest Information<span class="separator-two"></span></div>
            <h2>You check our latest update <br> with news and artical</h2>
        </div>
        <div class="row clearfix">

            <!-- News Block -->
            @foreach ($news as $n)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{route('detail-information', $n->id)}}"><img src="{{asset($n->image)}}" /></a>
                        <div class="post-date">{{date_format($n->created_at, "d")}} <br><span>{{date_format($n->created_at, "M/y")}}</span></div>
                    </div>
                    <div class="lower-content">
                        <h4><a href="{{route('detail-information', $n->id)}}">{{$n->title}}</a></h4>
                        <div class="text">{!! Str::limit($n->content, 100) !!}</div>
                        <a class="read-more" href="{{route('detail-information', $n->id)}}">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Counter Section -->
<section class="counter-section" style="background-image:url({{asset('images/bg-count.jpg')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title light centered">
            <div class="title"><span class="separator"></span>Counter<span class="separator-two"></span></div>
            <h2>What we have achive</h2>
        </div>

        <!-- Fact Counter -->
        <div class="fact-counter">
            <div class="row clearfix">

                <!-- Column -->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-user-1"></div>
                            <div class="counter-title">Tenaga Pengajar</div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3500" data-stop="210">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-project-management"></div>
                            <div class="counter-title">Laboratorium</div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2500" data-stop="35">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-house-1"></div>
                            <div class="counter-title">PRODI S1</div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="7">0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-graduated"></div>
                            <div class="counter-title">PRODI S2-S3</div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3500" data-stop="5">0</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Counter Section -->
@endforeach
@endif

@endsection
