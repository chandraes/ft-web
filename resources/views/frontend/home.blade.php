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
@endforeach
@endif

@endsection
