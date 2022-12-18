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

<!-- Team Section -->
<section class="team-page-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <div class="title"><span class="separator"></span>Our Leader<span class="separator-two"></span></div>
            <h2>Dosen</h2>
        </div>
        <div class="row clearfix aligns-items-center justify-content-center">
            <!-- Team Block -->
            @foreach ($dosens as $d)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 ">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="pattern-layer" style="background-image:url({{asset($d->image)}})"></div>
                        <div class="image">
                            <a href="{{route('detail-dosen', ['id'=> $d->id])}}"><img src="{{asset($d->image)}}"/></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{route('detail-dosen', ['id'=> $d->id])}}">{{$d->name}}</a></h4>
                            <div class="designation">{{$d->jurusan_prodi}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
@endsection
