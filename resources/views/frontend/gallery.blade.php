@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url({{asset('assets_front/images/background/7.jpg')}})">
    <div class="auto-container">
        <ul class="page-breadcrumb">
            <li><a href="{{route('home')}}">home</a></li>
            <li>Gallery</li>

        </ul>
        <h2>{{request()->segment(1)}}</h2>
    </div>
</section>
<section class="project-section">

    <div class="auto-container">
        <!-- MixitUp Galery -->
        <div class="mb-5">
            {{ $data->links() }}
        </div>

        <div class="mixitup-gallery mt-6">
            <div class="row clearfix">
                @foreach ($data as $d)
                <div class="gallery-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{asset($d->image)}}" alt="" style="height: 370px">
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{asset($d->image)}}" data-fancybox="gallery" data-caption="" class="icon flaticon-full-screen"></a>
                                        {{-- <a href="portfolio-detail.html" class="icon flaticon-link"></a> --}}
                                    </div>
                                </div>
                            </div>
                        </figure>
                        @if (!empty($d->title))
                        <div class="lower-content">
                            <div class="title"><h6 style="font-size: 14px">{{$d->title}}</h6></div>
                        </div>
                        @endif

                    </div>
                </div>
                @endforeach
                <!-- Gallery Block -->
            </div>
        </div>
        {{ $data->links() }}
    </div>
</section>
@endsection
