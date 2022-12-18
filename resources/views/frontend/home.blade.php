@extends('layouts.frontend')
@section('content')
<!-- Main Slider Section -->
<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @if (!empty($carousels))
        @foreach ($carousels as $c)
        <div class="slide" style="background-image:url({{$c->image}}); height: 600px">
            <div class="auto-container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 cl-md-12 col-sm-12 ">
                        <div class="inner-column">
                            <h1 class="title">{{$c->title}}</h1>
                            <div class="text">{{$c->subtitle}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="auto-container">
        <div class="inner-container"
            style="background-image:url({{asset('assets_front/images/background/pattern-1.png')}})">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title"><span class="separator"></span>About Us</div>
                            <h2>Tentang Fakultas Teknik UNSRI</h2>
                        </div>
                        <div class="text">
                            <p>{!! clean($about->about)!!}</p>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{$about->image}}" alt="" />
                            <!-- Experiance Box -->
                            <div class="experiance-box">
                                <div class="box-inner">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="{{date('Y')-1960}}">0</span>
                                    </div>
                                    <h6>Year OF <br> Experience</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


{{-- Information --}}
<section class="news-section" style="background-image:url({{asset('assets_front/images/background/pattern-5.png')}})">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Latest Information<span class="separator-two"></span>
            </div>
            <h2>You check our latest update <br> with news and artical</h2>
        </div>
        <div class="row clearfix">

            <!-- News Block -->
            @foreach ($news as $n)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <a href="{{route('detail-information', ['id'=>$n->id, 'slug' => $n->slug])}}"><img src="{{asset($n->image)}}" /></a>
                        <div class="post-date">{{date_format($n->created_at, "d")}}
                            <br><span>{{date_format($n->created_at, "M/y")}}</span></div>
                    </div>
                    <div class="lower-content">
                        <h4><a href="{{route('detail-information', ['id'=>$n->id, 'slug'=>$n->slug])}}">{{$n->title}}</a></h4>
                        <div class="text">{!! clean($n->short_description) !!}</div>
                        <a class="read-more" href="{{route('detail-information', ['id'=>$n->id, 'slug'=>$n->slug])}}">Read More</a>
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
            <h2>What we have!!</h2>
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
                                <span class="count-text" data-speed="3500" data-stop="{{$count_dosen}}">0</span>
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
                                <span class="count-text" data-speed="2500" data-stop="{{$count_lab}}">0</span>
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

<section class="project-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Laboratoria<span class="separator-two"></span></div>
            <h2>Transforming the ideas & <br> visions for Education!</h2>
        </div>
        <!-- MixitUp Galery -->
        <div class="mixitup-gallery">

            <!-- Filter -->
            <div class="filter-labs filters filter-tabs filter-btns text-center clearfix">
                <ul class="filter-tabs filter-btns text-center clearfix">
                    <li data-role="button" class="active filter-lab filter" data-filter="all">All</li>
                    @foreach ($category as $c)
                    <li data-role="button" class="filter-lab" data-filter=".{{strtolower($c->name)}}">
                        {{strtoupper($c->name)}}</li>
                    @endforeach
                </ul>
            </div>

            <div class="lab-item row clearfix">
                @foreach ($lab as $d)
                <div class="gallery-block mix all {{strtolower($d->category->name)}} col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($d->image)}}" alt="">
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset($d->image)}}" data-caption="" data-fancybox="gallery"
                                            class="icon flaticon-full-screen"></a>
                                        <a href="{{route('detail-laboratory', ['id' => $d->id, 'slug' => $d->slug])}}" class="icon flaticon-link"></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <div class="title">{{$d->category->name}}</div>
                            <h5 style="font-size: 15px"><a href="{{route('detail-laboratory', ['id' => $d->id, 'slug' => $d->slug])}}">{{$d->name}}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="btn-box text-center">
                <a href="{{route('laboratory')}}" class="theme-btn btn-style-four"><span class="txt">View All Laboratoria</span></a>
            </div>

        </div>
    </div>
</section>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.0.0/mixitup.min.js"></script>
<script>
    const mixer = mixitup('.lab-item', {
        selectors: {
            target: '.mix'
        },
        animation: {
            duration: 300
        }
    });

    const filterBtns = document.querySelector('.filter-labs');

    filterBtns.addEventListener('click', e => {
        if (e.target.matches('.filter-lab')) {
            const filter = e.target.dataset.filter;
            mixer.filter(filter);

            //add active class
            filterBtns.querySelector('.active').classList.remove('active');
            e.target.classList.add('active', 'filter');

        }

    });
</script>
@endpush
